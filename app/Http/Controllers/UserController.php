<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function sayHelo()
    {
        return "<h1>Hello, Laravel!</h1>";
    }
}
