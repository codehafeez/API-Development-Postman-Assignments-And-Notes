<?php

    $id = "ACf57a579bbd588eadd58c000d5266a609";
    $token = "4b499a6e8c6a30a4d5bb0319724051a0";
    $url = "https://api.twilio.com/2010-04-01/Accounts/$id/SMS/Messages";
    $from = "+12184133576";
    $to = "+19542600212"; // twilio trial verified number
    $body = "Test WhatsApp Message From CodeHafeez.";
    $data = array (
        'From' => $from,
        'To' => $to,
        'Body' => $body,
    );
    $post = http_build_query($data);
    $x = curl_init($url );
    curl_setopt($x, CURLOPT_POST, true);
    curl_setopt($x, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($x, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($x, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($x, CURLOPT_USERPWD, "$id:$token");
    curl_setopt($x, CURLOPT_POSTFIELDS, $post);
    $y = curl_exec($x);
    echo "<pre>";
    print_r($y);
    echo "</pre>";
    curl_close($x);
    var_dump($post);
    var_dump($y);
    

?>