<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students/index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'nrp'=>'required|size:9',
            'email'=>'required',
            'jurusan'=>'required'
            ]);
            Student::create($request->all());

            return redirect('/students')->with('status', 'Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students/show', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student $student)
    {
        $request->validate([
            'nama'=>'required',
            'nrp'=>'required|size:9',
            'email'=>'required',
            'jurusan'=>'required'
            ]);
        
        Student::where('id', $student->id)->update([
            'nama'=>$request->nama,
            'nrp'=>$request->nrp,
            'email'=>$request->email,
            'jurusan'=>$request->jurusan
            ]);

            
            return redirect('/students')->with('status', 'Data Berhasil Diubah');
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('status','Data Berhasil Dihapus');
    }
}
