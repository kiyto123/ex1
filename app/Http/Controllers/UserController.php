<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return "User";
    }

    public function create(){
        return "create user";
    }

    public function SName($name){
        return "Hello $name";
    }

    public function SnameAge($name,$age){
        return "Hello $name old $age";
    }
}
