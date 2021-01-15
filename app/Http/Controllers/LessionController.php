<?php

namespace App\Http\Controllers;

use App\Lession;
use Illuminate\Http\Request;

class LessionController extends Controller
{
    //
    public function findAll(){
        $lessions = Lession::where('status',1)->get();
        return view('lession')->with('lessions',$lessions);
    }
    public function findAllLession(){
        $lessions = Lession::where('status',1)->get();
        return view('admin.all_lession')->with('lessions',$lessions);
    }

}
