<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index($id){
        $user = User::all();
        return view('welcome', ['id' => $id, 'user' => $user]);
}

}
