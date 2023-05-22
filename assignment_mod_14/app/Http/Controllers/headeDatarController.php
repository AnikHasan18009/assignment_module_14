<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class headeDatarController extends Controller
{
    function getUserAgent(Request $request)
    {
        $userAgent=$request->header('User-Agent',null);
        return $userAgent;
    }
}
