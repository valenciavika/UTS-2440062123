<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;


class usercontroller extends Controller
{
    public function user($id){
        $user = [
            [
               'name' => 'Mr. Vico Lomar',
               'key' => 1,
               'level' => 'Gold Level',
               'color' => 'goldLevel'
            ],
            [
                'name' => 'Ms. Fei Fei Li.',
                'key' => 2,
                'level' => 'Green Level',
                'color' => 'greenLevel'
            ],
        ];
        return view('welcome', ['id' => $id, 'user' => $user]);
    }
}
