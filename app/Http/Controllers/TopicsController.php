<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topics;
class TopicsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date = date('l, m-F-Y');
        $time = date('H:i A');

        $topicsCount = Topics::count();

        $topic = Topics::latest()->paginate(5);

        return view('topics.index', compact('date', 'time','topic', 'topicsCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->validate([
            'topic_title' => 'required|unique:topics|min:4',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date'
            ]);

            $insertTopic = Topics::create([
            'topic_title' => $data['topic_title'],
            'start_date' => $data['start_date'],
            'end_date' => $data['end_date']
            ]);

            return back();
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
    public function destroy($id){

        Topics::find($id)->delete($id);

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
}
