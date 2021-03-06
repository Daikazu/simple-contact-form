<?php

return [
    'to_address'      => env('SIMPLE_CONTACT_FORM_TO_ADDRESS', 'example@mail.com'),
    'from_address'    => env('SIMPLE_CONTACT_FORM_FROM_ADDRESS','example@mail.com'),
    'subject'         => env('SIMPLE_CONTACT_FORM_SUBJECT', 'Contact Form Request'),
    'success_message' => env('SIMPLE_CONTACT_SUCCESS_MESSAGE', 'Thanks for contacting us!'),

    // Store the Request info in Database
    'store_request'   => env('SIMPLE_CONTACT_STORE_REQUEST', true),

    // Send Email
    'send_email'      => env('SIMPLE_CONTACT_SEND_EMAIL', true),
];
