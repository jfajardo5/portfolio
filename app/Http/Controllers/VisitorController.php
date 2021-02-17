<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index()
    {
        return Visitor::orderBy('created_at', 'desc')->get();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \App\Models\Visitor  $visitor
     */
    public static function store(Request $request)
    {
        $visitor = new Visitor();
        $visitor->request_uri = $request->server('REQUEST_URI');
        $visitor->ip_address = $request->server('REMOTE_ADDR');
        $visitor->user_agent = $request->server('HTTP_USER_AGENT');
        $visitor->hostname = $request->server('REMOTE_HOST');
        $visitor->referring_url = $request->server('HTTP_REFERER');
        return $visitor->save();
    }

}
