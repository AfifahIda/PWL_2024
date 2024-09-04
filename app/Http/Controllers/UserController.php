<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function biodata($id, $name){
        return view('blog.user')
        ->with('id', $id)
        ->with('name',$name);
    }
}