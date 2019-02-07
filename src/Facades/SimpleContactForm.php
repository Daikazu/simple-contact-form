<?php

namespace Daikazu\SimpleContactForm\Facades;

use Illuminate\Support\Facades\Facade;

class SimpleContactForm extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'simple-contact-form';
    }
}
