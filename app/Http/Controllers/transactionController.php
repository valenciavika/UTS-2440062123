<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaction;
use App\Models\User;

class transactionController extends Controller
{
    public function index()
    {
        // $transaction = transaction::all();
        $user = User::first();
        $transaction = $user->transactions()->orderBy('date', 'DESC')->get();

        return view('transaction', ['tr' => $transaction]);
    }


}
