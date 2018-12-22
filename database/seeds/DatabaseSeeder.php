<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User([
            'name' => 'admin',
            'email' => 'admin@zitro.com',
            'password' => bcrypt('Pa$$word6482')
        ]);

        $user->save();
        //$this->call(UsersTableSeeder::class);
    }
}
