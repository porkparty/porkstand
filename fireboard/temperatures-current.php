<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://fireboard.io/api/v1/devices/e0e729d8-6db4-4a50-a240-e8611e024dd6/temps.json",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Accept-Encoding: gzip, deflate",
    "Authorization: Token a47c13b90b26c55f46ebb006749fc9090d4aa891",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Host: fireboard.io",
    "Postman-Token: d70bbc46-e605-4b31-b99b-08d7bcb0ab09,199a22f2-c55a-4e22-84cf-5c1095fdfbbe",
    "User-Agent: PostmanRuntime/7.15.2",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

$array = json_decode($response, true);

echo ("<pre>");
echo ("Temperature values are included if they are less than a minute old, otherwise nothing is returned for the channel.")
var_dump($array);
echo ("</pre>");  