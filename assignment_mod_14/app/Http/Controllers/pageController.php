<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    function getDefaultPage(Request $request)
    {
      $page=null;
      return $page;
    }

    function getPageNumber(Request $request)
    {
        $page=$request->page?$request->page:null;
        return $page;
    }
}
