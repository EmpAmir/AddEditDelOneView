<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $url = url('/');
        $title=("Add Student");
        $btn=("Add");
        $students = Student::all();
        $data = compact('url','students','title','btn');
        return view('welcome')->with($data);
    }

    public function store(Request $request)
    {
        //
        $student = new Student();
        $student->name = $request->name;
        $student->age = $request->age;
        $student->save();
        return redirect(route('index'));
    }

    public function edit($id)
    {
        $student = Student::find($id);
        $url=url('edit')."/".$id;
        $title=("Update Student");
        $btn=("Update");
        $students = Student::all();
        $data = compact('student','url','students','title','btn');
        return view('welcome')->with($data);
    }


    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->name;
        $student->age = $request->age;
        $student->save();
        return redirect(route('index'));
    }

    public function destroy($id)
    {
        Student::destroy($id);
        return redirect(route('index'));
    }
}
