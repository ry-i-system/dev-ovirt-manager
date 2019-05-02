<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OvirtAccessController extends Controller
{
    public function __construct()
    {

    }

    // All vm lists get
    public function vms()
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, config('app.ovirt_url') . '/vms');
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($curl, CURLOPT_USERNAME, config('app.ovirt_username'));
        curl_setopt($curl, CURLOPT_USERPWD, config('app.ovirt_password'));
        curl_setopt($curl, CURLOPT_SSLCERT, config('app.ovirt_pem'));
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Version: 4', 'Accept: application/xml'));
        $result = curl_exec($curl);
        curl_close($curl);
        return json_decode($result,true);
    }
}
