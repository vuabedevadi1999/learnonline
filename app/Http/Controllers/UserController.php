<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function findAll(){
        $users = User::paginate(5);
        $name = "Danh sách người dùng";
        return view('user')->with('users',$users)->with('name',$name);;
    }
}
