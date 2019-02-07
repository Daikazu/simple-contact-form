<?php

namespace Daikazu\SimpleContactForm\Http\Controllers;



use Illuminate\Http\Request;

class SimpleContactFormController
{

    public function __construct(Request $request)
    {
        if ($request->get('recaptcha')) {
            $request->merge(['g-recaptcha-response' => $request->get('recaptcha')]);
        }
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'                 => 'required',
            'email'                => 'required|email',
            'g-recaptcha-response' => 'required|recaptcha',
        ]);


//        Mail::to(config('website.email'))->send(new ContactUs($request->all()));
    }




}
