<?php

namespace Daikazu\SimpleContactForm\Tests;

use Daikazu\SimpleContactForm\Facades\SimpleContactForm;
use Daikazu\SimpleContactForm\ServiceProvider;
use Orchestra\Testbench\TestCase;

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
