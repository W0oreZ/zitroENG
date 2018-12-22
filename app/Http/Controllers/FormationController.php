<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\formation;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formations = formation::all();
        return view('admin.formations.index')->withFormations($formations);
    }

    public function listing()
    {
        $formations = formation::all();
        return view('formation.index')->withFormations($formations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,bmp|max:2048',
        ]);

        $image = $request->file('image');
        $originalname = $image->getClientOriginalName();
        //$originalext = $image->getClientOriginalExtension();

        $imagefullname = time().'_'.$originalname;
    
        $destinationPath = public_path('/images/formations');
    
        $image->move($destinationPath, $imagefullname);

        $formation = new formation($request->all());
        $formation->image = $imagefullname;
        
        $formation->save();

        return redirect(route('formations.list'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
