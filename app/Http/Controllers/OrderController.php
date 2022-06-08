<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
class OrderController extends Controller
{
    public function createorder(Request $request)
    {
        if(Auth::user()){
            $request->validate([
                'user_id' => 'required',
                'place_id' => 'required',
                'date' => 'required',
            ]);
            $order = Order::create([
                'user_id' => $request['user_id'],
                'place_id' => $request['place_id'],
                'date' => $request['date'],
            ]);
            return redirect()->route('landing');
        }
        return redirect()->route('signin');
    }
}
