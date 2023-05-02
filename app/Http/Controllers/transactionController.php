<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaction;
use App\Models\User;


class transactionController extends Controller
{
    public function index($id)
    {
        //
        $use = User::all();
        $userr = User::find($id);
        $transaction = $userr->transactions()->orderBy('date', 'DESC')->get();
        // $transaction = transaction::all();
        return view('transaction', ['tr' => $transaction, 'user' => $use, 'id'=>$id]);
    }


}
