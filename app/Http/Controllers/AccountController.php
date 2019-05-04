<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DbAccess;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        return view('account', ['user' => $user]);
    }
}
