<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    function index(){
        $transactions = Transaction::all();
        return view('status', ['transactions' => $transactions]);
    }
}
