<?php

namespace RishadBlack\DevModule\Controllers;

use Illuminate\Http\Request;

class DevModuleController
{
    public function __invoke()
    {
        return view('dev-module::index');

    }
}
