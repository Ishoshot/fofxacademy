<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cohort;
use App\Pairs;
use App\Students;
use App\Topics;
use App\Attendance;
use App\Http\Resources\Cohort as CohortResource;

class AttendanceController extends Controller
{

	public function __construct()
    {
        // $this->middleware('guest');
    }


	public function cohort()
    {
    	$cohorts = Cohort::paginate(5);

        return CohortResource::collection($cohorts);
    }


    public function submit(Request $request) {

        $data = request()->validate([
           'username' => ['required','string','min:5'],
            'cohort' => ['required']
        ]);

        // $cohortStatus = Cohort::findorfail($data['cohort']);

        // if ($cohortStatus !== 1) {
        // 	return response()->json(["code" => "99", "message" => "The cohort is not active" ]);
        // }
        // else{

        // }
        return $data;

    	//$col = Cohort::paginate(5);


        //return CohortResource::collection($col);

        // return response()->json(null, 200);
    }
}
