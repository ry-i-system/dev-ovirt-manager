<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DbAccess;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $db_obj = new DbAccess();
        $users = $db_obj->get_users();
        return view('account', ['users' => $users]);
    }
}
