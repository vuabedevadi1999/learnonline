<?php

namespace App\Http\Controllers;

use App\Classes;

class ClassController extends Controller
{
    //
    public function findAll(){
        $classes = Classes::paginate(5);
        $name = "Danh sách lớp học";
        return view('class')->with('classes',$classes)->with('name',$name);
    }
}
