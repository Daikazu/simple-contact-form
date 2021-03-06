<?php

namespace Daikazu\SimpleContactForm\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class SimpleContactFormController
{
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'email'   => 'required|email',
            'message' => 'required',
        ]);

        if (config('simple-contact-form.store_request')) {

            \Daikazu\SimpleContactForm\ContactUs::create([
                'name'    => $request->get('name'),
                'email'   => $request->get('email'),
                'message' => $request->get('message'),
                'meta'    => $request->ips(),
            ]);
        }

        if (config('simple-contact-form.send_email')) {

            Mail::send('simple-contact-form::email', [
                'name'         => $request->get('name'),
                'email'        => $request->get('email'),
                'user_message' => $request->get('message'),
            ], function ($message) {
                $message->from(config('simple-contact-form.from_address'));
                $message->to(config('simple-contact-form.to_address'));
                $message->subject(config('simple-contact-form.subject'));
            });
        }


        return back()->with('simple-contact-form-success', config('simple-contact-form.success_message'));
    }
}
