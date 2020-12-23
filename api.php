<?php
$phone = $_GET['num'];
$url = 'https://auth.goomo.com/v2/phone_confirmation/verify_user';
$data = ["email" => "fxkkkkk@hi2.in", "phone_number" => "$phone", "country_code" => "91"];
$payload = json_encode($data);
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLINFO_HEADER_OUT, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json;charset=UTF-8' ,
	'Host: auth.goomo.com', //www.goomo.com //client-api.goomo.com
	'Connection: keep-alive',
	'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3887.122 Safari/537.36 ' ,
    
	'Accept-Encoding: gzip, deflate, br',
    'Content-Length: ' . strlen($payload))
);
$output = curl_exec($curl);
curl_close($curl);
echo $output;