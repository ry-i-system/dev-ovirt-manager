<?php

namespace App\Models;

class OvirtAccess
{
    // Ovirt API Access
    private function ovirt_curl($req_url, $req_prm)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, config('app.ovirt_url') . $req_url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $req_prm);
        curl_setopt($curl, CURLOPT_USERPWD, config('app.ovirt_username') . ':' . config('app.ovirt_password'));
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Version: 4', 'Accept: application/xml'));
        $result = curl_exec($curl);
        curl_close($curl);
        $json = json_encode($result);
        return $json;
    }

    // Get VM Lists All
    public function get_vms()
    {
        $result = $this->ovirt_curl("/vms", "GET");
        return $result;
    }

    // Get VM
    public function get_vm($vm_id)
    {
        $result = $this->ovirt_curl("/vms\/" . $vm_id, "GET");
        return $result;
    }
}
