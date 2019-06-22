<?php

namespace App\Models;

class OvirtAccess
{
    /**
     * Ovirt API Access
     *  @param   mixed
     *  @return  json
     */
    private function ovirt_curl($req_prm)
    {
        $url = $req_prm['url'];
        $req = $req_prm['req'];

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, config('app.ovirt_url') . $url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $req);
        curl_setopt($curl, CURLOPT_USERPWD, config('app.ovirt_username') . ':' . config('app.ovirt_password'));
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Version: 4', 'Accept: application/json'));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HEADER, true);
        $result = curl_exec($curl);
        $result_info = curl_getinfo($curl);
        curl_close($curl);
        $result_code = $result_info["http_code"];
        $result_body = substr($result, $result_info["header_size"]);
        $json = json_encode($result_body, JSON_UNESCAPED_SLASHES);

        if ($result_code == 200) {
            return $result_body;
        } else {
            return false;
        }
    }

    // Get VM Lists All
    public function get_vms()
    {
        $req_prm = array();
        $req_prm['url'] = "/vms";
        $req_prm['req'] = "GET";

        $result = $this->ovirt_curl($req_prm);
        return $result;
    }

    // Get VM
    public function get_vm($vm_id)
    {
        $result = $this->ovirt_curl("/vms\/" . $vm_id, "GET");
        return $result;
    }
}
