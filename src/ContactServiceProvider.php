<?php

namespace RomelPaano\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function boot()
    {
        dd("It works!");
    }

    public function register()
    {

    }
}
