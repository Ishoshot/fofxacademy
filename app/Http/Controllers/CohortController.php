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
        $countCohort = Cohort::count();
        $cohort = Cohort::latest()->paginate(5);
        return view('cohorts.index',compact('date','time', 'cohort','countCohort'));
    }


    public function store()
    {
        $data = request()->validate([
            'name' => 'required|unique:cohorts',
            'cohorts_status' =>'required'
        ]);

       $insertCohort = Cohort::create([
            'name' => $data['name'],
            'status' => $data['cohorts_status']
        ]);
            return back();
    }

    public function changeStatus(Request $request)
    {
        $change = Cohort::find($request->id);
        $change->status = $request->status;
        $change->save();

        return response()->json(['success'=>'Status change successfully.']);
    }

    public function destroy($id){

        Cohort::find($id)->delete($id);

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
}
