<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fileHandleController extends Controller
{
    function saveFile(Request $request){
    
    $file=$request->file('avatar');
    if($file){
     $file->move(public_path("uploads"),$file->getClientOriginalName());
     return "Successfully saved";}
     else{
        return "File missing";
     }
    }
}
