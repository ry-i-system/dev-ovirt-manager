<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DbAccess;

class IpadderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Get VLAN list from DB
        $db_obj = new DbAccess();
        $vlan1_lists = $db_obj->get_vlan1_lists();
        $vlan2_lists = $db_obj->get_vlan2_lists();

        // Pass array to the view
        return view('ipadder', ['vlan1_lists' => $vlan1_lists, 'vlan2_lists' => $vlan2_lists]);
    }
}
