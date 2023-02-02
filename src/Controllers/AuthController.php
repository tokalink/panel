<?php

namespace Tokalink\Panel\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('panel::auth.login');
    }
}
