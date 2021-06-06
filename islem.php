<?php
define('contractaddress','0x8076c74c5e3f5852037f31ff0093eeb8c8add8d3');
define('apikey','1XQ3UJB6Q2GE212N3TRW9AGE5BYTFZPKF3');
define('apiadres','https://api.bscscan.com/api');


function BilgiGetir ($action,$module){
    $fields = [
        'apikey' => apikey,
        'contractaddress' => contractaddress,
        'action'=>$action,
        'module'=>$module,
    ];

    $ch = curl_init(apiadres);
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($fields),
        CURLOPT_RETURNTRANSFER => true
    ]);
    $result = curl_exec($ch);
    curl_close($ch);
    return json_decode($result, true);
}