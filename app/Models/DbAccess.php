<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DbAccess extends Model
{
    // Get VLAN1 Lists All
    public function get_vlan1_lists()
    {
        $result = DB::table('vlan1_lists')->get();
        return $result;
    }

    // Get VLAN2 Lists All
    public function get_vlan2_lists()
    {
        $result = DB::table('vlan2_lists')->get();
        return $result;
    }

    // Get Users All
    public function get_users()
    {
        $result = DB::table('users')->get();
        return $result;
    }
}
