<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use App\Cohort;

class StudentsController extends Controller
{
    public function index()
    {
        $date = date('l, m-F-Y');
        $time = date('H:i A');

        $students = Students::latest()->paginate(5);

        return view('students.index', compact('date', 'time','students'));
    }

    public function  store(){
        $data = request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required |unique:students',
            'cohort_id' => 'required'
        ]);
        
        $status = Cohort::find($data['cohort_id']);
       
        $student_status = $status->status;

        $students = Students::create([
            'firstname' => $data['firstname'],
            'lastname' =>$data['lastname'],
            'username' =>$data['username'],
            'cohort_status' => $student_status
        ]);
        return back();
    }
}