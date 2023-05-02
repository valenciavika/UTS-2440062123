<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coffee;
use App\Models\User;
use App\Models\transaction;

class ccontroller extends Controller
{
    public function index($use, $id)
    {
        $coffees = Coffee::all();
        $user = User::all();
        return view('coffee', ['use' => $use, 'id' => $id, 'coffee' => $coffees, 'user'=>$user]);
    }

    public function buy(Coffee $coffee, $use)
    {
        $userr = User::find($use);
        $price = $coffee->price;

        // Check user loyalty status
        if ($userr->loyalty_level === 'Gold') {
            $price = $price * 0.9;
        }

        $userr->transactions()->create([
            'coffee_id' => $coffee->id,
            'user_id' => $use,
            'price' => $price,
            'date' => now(),
        ]);
        return redirect()->route('transactions.index', $use)->with('success', 'Transaction successful!');
    }

}

