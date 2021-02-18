<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forms')->with('forms', ContactForm::orderBy('created_at', 'desc')->get());
    }

    /**
     * List all stored resources
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Client\Response
     */
    public function list() {
        return view('forms')->with('forms', ContactForm::orderBy('created_at', 'desc')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:100',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        $form = new ContactForm();
        $form->ip_address = $request->server('REMOTE_ADDR');
        $form->user_agent = $request->server('HTTP_USER_AGENT');
        $form->hostname = $request->server('REMOTE_HOST');
        $form->name = $request->post('name');
        $form->email = $request->post('email');
        $form->message = $request->post('message');
        $form->save();
        Mail::to(env('ADMIN_EMAIL'))->send(new ContactFormSubmitted($form));

        return redirect()->route('thanks');
    }

}
