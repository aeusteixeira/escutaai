<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index($account)
    {
        $account = Artist::where('account', $account)->first();
        $account = $account->with('albums')->get();
        return view('account.index', [
            'account' => $account,
        ]);
    }
}
