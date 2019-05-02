<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class OvirtAccessController extends Controller
{
    // Ovirt API Access
    private function ovirt_get_curl($req_url, $req_prm)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, config('app.ovirt_url') . $req_url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $req_prm);
        curl_setopt($curl, CURLOPT_USERNAME, config('app.ovirt_username'));
        curl_setopt($curl, CURLOPT_USERPWD, config('app.ovirt_password'));
        curl_setopt($curl, CURLOPT_SSLCERT, config('app.ovirt_pem'));
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Version: 4', 'Accept: application/xml'));
        $result = curl_exec($curl);
        curl_close($curl);
        return json_decode($result,true);
    }

    // All vm lists get
    public function vms()
    {
        $result = $this->ovirt_get_curl('/vms', 'GET');
        return $result;
    }
}
