<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function login()
    {
        return \App::make('auth0')->login(null, null, ['scope' => 'openid profile email'], 'code');
    }
}
