<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cohort;

class CohortController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $date = date('l, m-F-Y');
        $time = date('H:i A');

        $cohort = Cohort::latest()->paginate(5);
        return view('cohorts.index',compact('date','time', 'cohort'));
    }

    public function changeStatus(Cohort $cohort)
    {
        // $cohortChange = Cohort::find($request->cohort_id);

        // $cohortChange->status = $request->cohort_status;

        // $cohortChange->save();

        // return response()->json(['success'=>'Status change successfully.']);

        // $cohort = Cohort::find($cohort->id);
        // $user->status = $request->status;
        // $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }


    public function store()
    {
        $data = request()->validate([
            'cohort_name' => 'required',
            'cohorts_status' =>'required'
        ]);


       $insertCohort = Cohort::create([
            'name' => $data['cohorts_name'],
            'status' => $data['cohorts_status']
        ]);
            return back();
    }


}
