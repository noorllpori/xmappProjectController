<?php
    $botid = "2";
    $newname = "NEW BOT NAME";
    $token = "3ZKStTdP6wRsN94Ro6dLNt5Q0Ds=:4bOG5bWvaCmsEn3PThLUzjI8MWyAlGvg";
    $ch = curl_init();
    $token = str_replace(":ts3ab:", ":", $token);
    $headers = array(
        'Content-Type:application/json',
        'Authorization: Basic '. base64_encode($token)
    );
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $name = rawurlencode($newname);
    // the api call for '!bot use $botid (!xecute (!bot name $name) (!settings set connect.name $name))'
    curl_setopt($ch, CURLOPT_URL, "http://212.64.23.27:58913/api/bot/use/0/(/list/list/");
    curl_exec($ch);
    curl_close($ch);
?>