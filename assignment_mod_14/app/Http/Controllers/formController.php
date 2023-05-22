<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    function getName(Request $request): string
    {
       $name=$request->name;
       return "<h1> Your name is {$name}<h1>";
    }
}
