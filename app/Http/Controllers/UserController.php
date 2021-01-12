<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $name = "nurul islam";
        $student = array(
            "name"=> "tareq",
            "email"=> "treq@gmail.com",
            "mobile"=> "0177655788",
        );
        return view('user', compact("name", "student"));
    }
}
