<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentAccount;

class StudentController extends Controller
{
    //
    public function index()
    {   
        $students = StudentAccount::all();
        return view('ogts.students', ['students' => $students]);
        
    }
    public function create()
    {
        return view('ogts.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $data = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $newUser = StudentAccount::create($data);

        return redirect()->route('ogts.students');
    }

    public function edit(StudentAccount $student){
        return view('ogts.edit', ['student' => $student]);
    }

    public function update(StudentAccount $student, Request $request){
        $data = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $student->update($data);

        return redirect(route('ogts.students'))->with('message', 'Student updated successfully!');
    }

    public function destroy(StudentAccount $student){
        $student->delete();

        return redirect(route('ogts.students'))->with('message', 'Student deleted successfully!');
    }

    public function show()
    {
        return view('ogts.show');
    }

    public function login()
    {
        return view('ogts.login');
    }
}
    
