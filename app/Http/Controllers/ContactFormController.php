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
    public static function index()
    {
        return ContactForm::orderBy('created_at', 'desc')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \App\Models\ContactForm  $contactForm
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
        Mail::to(env('ADMIN_EMAIL'))->send(new ContactFormSubmitted($form));
        return $form->save();
    }

}
