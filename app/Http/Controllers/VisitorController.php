<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{

    /**
     * Display index page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Display thank you page.
     *
     * @return \Illuminate\Http\Response
     */
    public function thanks() {
        return view('thanks');
    }

    /**
     * List all stored resources
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Client\Response
     */
    public function list() {
        return view('visitors')->with('visitors', Visitor::orderBy('created_at', 'desc')->paginate(5));
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
