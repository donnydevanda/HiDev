<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    function index(){
        $auth = Auth::check();
        $userId = 0;
        $userRole = 0;

        if($auth){
            $userId = Auth::user()->id;
            $userRole = Auth::user()->role;
        }

        $transactions = Transaction::all();

        return view('status', ['auth' => $auth, 'userId' => $userId, 'userRole' => $userRole, 'transactions' => $transactions]);
    }

    function jobDetailPost(Request $request){
        $userId = Auth::user()->id;
        Transaction::updateOrCreate([
            'users_id' => $userId,
            'jobs_id' => $request->id,
            'status' => 'Waiting'
        ]);

        return redirect('/status');
    }

    function statusWithdraw(Request $request){
        Transaction::find($request->id)->delete();
        return redirect('/status');
    }

    function statusAccept(Request $request){
        Transaction::where(['id' => $request->id])->update([
            'status' => 'Accepted',
        ]);

        return redirect('/status');
    }

    function statusReject(Request $request){
        Transaction::where(['id' => $request->id])->update([
            'status' => 'Rejected',
        ]);

        return redirect('/status');
    }
}
