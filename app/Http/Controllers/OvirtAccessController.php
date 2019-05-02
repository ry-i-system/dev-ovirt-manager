<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class OvirtAccessController extends Controller
{
    public function __construct()
    {
        $client = new Client();
        $url = "https://zeus/ovirt-engine/api";
        $username = 'admin@internal';
        $password = '!q2w3e4r';
    }

    // All vm lists get
    public function vms()
    {
        $client = new Client();
        $url = "https://zeus/ovirt-engine/api";
        $username = 'admin@internal';
        $password = '!q2w3e4r';
        $response = $client->request(
            'GET',
            $url . "/vms",
            ['verify' => false],
            ['user' => 'admin@internal:!q2w3e4r'],
            ['headers' => ['Accept' => 'application/xml']]
        );
        $statusCode = $response->getStatusCode();
        if ($statusCode == 200) {
            $responseBody = $response->getBody()->getContents();
            return $responseBody;
        } else {
            return "Ovirt Access Error";
        }
    }
}
