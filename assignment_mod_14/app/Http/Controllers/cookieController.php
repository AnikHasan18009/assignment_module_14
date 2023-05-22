<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cookieController extends Controller
{
    function getRememberTokenValue(Request $request)
    {
        if($request->cookie('remember_token')!==null)
        {
            $rememberToken=$request->cookie('remember_token');
            return "Cookie value = {$rememberToken}";

        }
        else
        {
            $rememberToken=null;
            return "Cookie is not set"; 
        }
    }
}
