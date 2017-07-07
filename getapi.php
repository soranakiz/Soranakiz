<?php
 
$strAccessToken = "izEK3fPoNJsOUJW2eQ0v3En4AZJNcq4oqE/PKoBH45ZPiicl2BiASrdgoYQ0RtfZZhehS5tCWQSCZmnk2Cp/D8lef0BznJLA4aAU8vgOfeenN70Wegu5P7/C8iX1AEnZvb7VW+GSGRMGM1uhdrjGHgdB04t89/1O/w1cDnyilFU="; 
$strUrl = "https://api.line.me/v2/bot/message/push";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
$arrPostData = array();
$arrPostData['to'] = "U103b3a12632140f9d103acfe13b5a064";
$arrPostData['messages'][0]['type'] = "After";
$arrPostData['messages'][0]['text'] = "Soranakiz Guyz";
 
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);
 
?>
