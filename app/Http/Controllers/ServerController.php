<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OvirtAccess;
use App\Models\DbAccess;

class ServerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $oa_obj = new OvirtAccess();
        $vms = $oa_obj->get_vms();
        return view('server', ['vms' => $vms]);
    }
}
