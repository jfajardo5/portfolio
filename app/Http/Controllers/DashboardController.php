<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Inspiring;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index()
    {
        return view('dashboard')->with('inspire', Inspiring::quote());
    }
}
