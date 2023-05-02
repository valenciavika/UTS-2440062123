<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        //get all posts from Model
        $user = user::latest()->get();
        //passing posts to view
        return view('transaction', compact('user'));
}

}
