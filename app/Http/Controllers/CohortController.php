<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return view('cohorts.index', compact('date','time'));
    }
}
