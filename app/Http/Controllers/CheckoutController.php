<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkoutView(){
        return view('clients.checkout',[
            "title" => "Checkout"
        ]);
    }
}
