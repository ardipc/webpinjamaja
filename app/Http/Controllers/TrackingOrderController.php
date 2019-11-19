<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrackingOrderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('tracking-order');
    }

    public function investor()
    {
        return view('tracking-investor');
    }
}
