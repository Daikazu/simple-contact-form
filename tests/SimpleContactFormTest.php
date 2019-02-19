<?php

namespace Daikazu\SimpleContactForm\Tests;

use Orchestra\Testbench\TestCase;
use Daikazu\SimpleContactForm\ServiceProvider;
use Daikazu\SimpleContactForm\Facades\SimpleContactForm;

class SimpleContactFormTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'simple-contact-form' => SimpleContactForm::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
