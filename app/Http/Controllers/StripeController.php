<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    /**
     * Show the application Stripe page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('stripe');
    }
}
