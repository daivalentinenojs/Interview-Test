<?php
//API Url
$url = 'http://220.130.161.231:7007/api/v1/account/signin';
 
//Initiate cURL.
$ch = curl_init($url);
 
//The JSON data.
$jsonData = array(
    'email' => 'daiva@gmail.com',
    'password' => 'daivaxdaiva'
);
 
$jsonDataEncoded = json_encode($jsonData);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
 curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($ch);
?>