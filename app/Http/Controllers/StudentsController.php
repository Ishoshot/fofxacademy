<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use App\Cohort;

class StudentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $date = date('l, m-F-Y');
        $time = date('H:i A');

        $cohort = Cohort::all();

        $studentsCount = Students::count();

        $student = Students::latest()->paginate(5);

        return view('students.index', compact('date', 'time','student','cohort', 'studentsCount'));
    }

    public function  store()
    {
        $data = request()->validate([
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'username' => 'required |unique:students|min:3',
            'cohort_name' => 'required'
        ]);

        // dd($data['cohort_name']);

        $students = Students::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'username' => $data['username'],
            'cohort_name' => $data['cohort_name']
        ]);

        return back();
    }

    public function destroy($id)
    {
        Students::find($id)->delete($id);

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
}

