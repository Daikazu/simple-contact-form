<?php

namespace Daikazu\SimpleContactForm;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $table = 'contact_us';

    protected $casts = [
        'meta' => 'json',
    ];

    protected $fillable = ['name', 'email', 'message', 'meta'];
}
