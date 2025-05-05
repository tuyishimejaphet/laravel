<?php

namespace App\Http\Controllers;
use App\Models\stock;

use Illuminate\Http\Request;

class newcontroller extends Controller
{
   public function sod(Request $request){
         $data=$request->validate([
            'name'=>'required',
            'address'=>'required',
            'email'=>'required',
            'password'=>'required'
         ]);
         stock::create($data);
         return "data sent";
   }
}
