<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;
use App\formation;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('admin.student.index')->withStudents($students);
    }

    public function inscription()
    {
        return view('inscription');
    }

    public function registration(Request $request)
    {
        $this->validate($request,[
            'firstname' => 'required',
            'lastname' => 'required',
            'cin' => 'required',
            'dn' => 'required',
            'email' => 'required',
            'telephone' => 'required',
        ]);

        $student = new Student();

        $student->firstname = $request->input('firstname');
        $student->lastname = $request->input('lastname');
        $student->cin = $request->input('cin');
        $student->email = $request->input('email');
        $student->telephone = $request->input('telephone');
        $student->date_naissance = $request->input('dn');        

        $student->save();

        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.student.create');
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
            'firstname' => 'required',
            'lastname' => 'required',
            'cin' => 'required',
            'date_naissance' => 'required',
            'adresse'=>'required',
            'email' => 'required',
            'telephone' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,bmp|max:2048',
        ]);

        $image = $request->file('image');
        $originalname = $image->getClientOriginalName();
        //$originalext = $image->getClientOriginalExtension();

        $imagefullname = time().'_'.$originalname;
    
        $destinationPath = public_path('/images/students');
    
        $image->move($destinationPath, $imagefullname);

        $student = new Student($request->all());
        $student->image = $imagefullname;
        
        $student->save();

        return redirect(route('students.list'));
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
    public function edit(Student $student)
    {
        $formations = formation::all();

        return view('admin.student.show')->withStudent($student)->withFormations($formations);
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
     {
         if($request->has('cin'))
         {
             $student = Student::where('cin',$request->input('cin'))->first();
            return view('student.show')->withStudent($student);
         }else
         {
            return view('student.show');
         }
        
     }

     public function removeFormation(Request $request,Student $student)
     {
        $formation = formation::find($request->input('formation_id'));

        $student->formations()->detach($formation);

        return redirect(route('students.edit',$student));
     }

     public function changeimage(Request $request,Student $student)
     {
        $this->validate($request,[
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,bmp|max:2048',
        ]);

        $image = $request->file('image');

        $originalname = $image->getClientOriginalName();

        $imagefullname = time().'_'.$originalname;
    
        $destinationPath = public_path('/images/students');
    
        $image->move($destinationPath, $imagefullname);
        
        $student->update(['image' => $imagefullname]);

        return redirect(route('students.edit',$student));
     }

     public function addformation(Request $request, Student $student)
     {
         $formation = formation::find($request->input('formation_id'));
         $student->formations()->attach($formation,['start'=>$request->input('start'),'finnish'=>$request->input('finnish')]);
         return redirect(route('students.edit',$student));

     }
}
