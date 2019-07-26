<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Students;
use App\Topics;
use App\Pairs;

class PairsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $date = date('l, m-F-Y');
        $time = date('H:i:A');

        $students = Students::all();
        $topics = Topics::all();
        $countPairs = Pairs::count();
        $pair = Pairs::latest()->paginate(5);

        return view('pairs.index', compact('date', 'time', 'students','topics', 'pair', 'countPairs'));
    }

    public function store()
    {
        $data = request()->validate([
            'student_one' => 'required |different:student_two',
            'student_two' => 'required',
            'topics' => 'required'
        ]);

    // Fetch details[firstname & lastname] of  selected first student and second student
        $student_one_name = Students::where('username', '=', $data['student_one'])->first();
        $one_fname =   $student_one_name->firstname;
        $one_lname = $student_one_name->lastname;

        $student_two_name = Students::where('username', '=', $data['student_two'])->first();
        $two_fname =   $student_two_name->firstname;
        $two_lname = $student_two_name->lastname;

    // Fetch details[Full Topic Name] of  selected topic.
        $pairstopic = Topics::where('id', '=', $data['topics'])->first();
        $pTopic = $pairstopic->topic_title;

        $insertPairs = Pairs::create([
            'students_one' => $data['student_one'],
            'students_two' => $data['student_two'],
            'topics_id' => $data['topics'],
            'one_fname' => $one_fname,
            'one_lname' => $one_lname,
            'two_fname' => $two_fname,
            'two_lname' => $two_lname,
            'topic' => $pTopic
        ]);
        return back();
    }

    public function destroy($id){

        Pairs::find($id)->delete($id);

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }

}
