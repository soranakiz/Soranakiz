<?php
$access_token = 'izEK3fPoNJsOUJW2eQ0v3En4AZJNcq4oqE/PKoBH45ZPiicl2BiASrdgoYQ0RtfZZhehS5tCWQSCZmnk2Cp/D8lef0BznJLA4aAU8vgOfeenN70Wegu5P7/C8iX1AEnZvb7VW+GSGRMGM1uhdrjGHgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/linebot';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
