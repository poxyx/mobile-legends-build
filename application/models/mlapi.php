<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');
class Mlapi extends CI_Model

{
    
    function get_all_hero_info_by_id($id)
    {
    
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://mapi.mobilelegends.com/hero/detail?id=".$id."",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "Accept: */*",
            "Accept-Encoding: gzip, deflate",
            "Cache-Control: no-cache",
            "Connection: keep-alive",
            "Cookie: PHPSESSID=3a266c306c3775512985987dbd0ad764",
            "Host: mapi.mobilelegends.com",
            "Postman-Token: 749505fe-2e6e-4616-bfc1-872ec1d24aa5,c470bd38-8b70-48a0-abc2-3dbb7ff2a2ba",
            "User-Agent: PostmanRuntime/7.15.2",
            "cache-control: no-cache"
          ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
          return "cURL Error #:" . $err;
        } else {
          return json_decode($response,true);
        }
    }

    function get_hero_ranking_all($id)
    {
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://mapi.mobilelegends.com/legends/area?dateType=week&area=all&module=2&moduleType=all&language=en",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "Accept: */*",
            "Accept-Encoding: gzip, deflate",
            "Cache-Control: no-cache",
            "Connection: keep-alive",
            "Cookie: PHPSESSID=3a266c306c3775512985987dbd0ad764",
            "Host: mapi.mobilelegends.com",
            "Postman-Token: 749505fe-2e6e-4616-bfc1-872ec1d24aa5,c470bd38-8b70-48a0-abc2-3dbb7ff2a2ba",
            "User-Agent: PostmanRuntime/7.15.2",
            "cache-control: no-cache"
          ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
          return "cURL Error #:" . $err;
        } else {
           $rank = json_decode($response,true);
           return @$rank['data'][$id];
        }
    }
}
