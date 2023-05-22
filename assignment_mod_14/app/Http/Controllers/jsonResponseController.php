<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class jsonResponseController extends Controller
{
    function getResponse():JsonResponse
    {
        return response()->json(
            [
            "message" => "Success",
            "data"=> [
                "name" => "John Doe",
                "age" => 25
                   ]]);
    }
}
