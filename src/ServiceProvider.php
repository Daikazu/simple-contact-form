<?php

namespace Daikazu\SimpleContactForm;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

    const NAMESPACE = 'simple-contact-form';
    const CONFIG_PATH = __DIR__ . '/../config/simple-contact-form.php';
    const VIEW_PATH = __DIR__ . '/../resources/views';
    const ROUTES_PATH = __DIR__ . '/../routes/web.php';


    public function boot()
    {
        $this->publishes([
            self::CONFIG_PATH => config_path('simple-contact-form.php'),
        ], self::NAMESPACE . '-config');

        $this->publishes([
            self::VIEW_PATH => resource_path('views/vendor/' . self::NAMESPACE),
        ], self::NAMESPACE . '-views');


        $this->loadViewsFrom(self::VIEW_PATH, self::NAMESPACE);

        $this->loadRoutesFrom(self::ROUTES_PATH);



    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            self::NAMESPACE
        );

        $this->app->bind('simple-contact-form', function () {
            return new SimpleContactForm();
        });
    }
}
