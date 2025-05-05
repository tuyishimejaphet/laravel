<?php

namespace App\Http\Controllers;
use App\Models\student;

use Illuminate\Http\Request;

class homeController extends Controller
{
   public function studentData(Request $request){
    $data=$request->validate([
        'names'=>'required',
        'class'=>'required',
        'username'=>'required',
        'password'=>'required'
    ]);
    student::create($data);
     return "Data sent";
   }
}
