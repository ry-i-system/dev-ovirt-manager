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
        // Get VM list from DB
        $db_obj = new DbAccess();
        $vmlists = $db_obj->get_vmlists();

        // Get VM List from Ovirt API
        $oa_obj = new OvirtAccess();
        $vms = $oa_obj->get_vms();

        // Pass array to the view
        return view('server', ['vms' => $vms, 'vmlists' => $vmlists]);
    }
}
