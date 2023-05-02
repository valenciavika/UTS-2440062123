<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coffee;
use App\Models\User;
use App\Models\transaction;

class ccontroller extends Controller
{
    public function index($id)
    {
        $coffees = Coffee::all();

        return view('coffee', ['id' => $id, 'coffee' => $coffees]);
    }

    public function buy(Coffee $coffee)
    {
        $user = User::first();
        $price = $coffee->price;

        // Check user loyalty status
        if ($user->loyalty_level === 'Gold') {
            $price = $price * 0.9;
        }

        // Create a transaction history record
        $user->transactions()->create([
            'coffee_id' => $coffee->id,
            'price' => $price,
            'date' => now(),
        ]);
        return redirect()->route('transactions.index')->with('success', 'Transaction successful!');
    }


}

