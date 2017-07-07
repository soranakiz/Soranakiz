<?php

//$ch = curl_init(); 
//curl_setopt($ch, CURLOPT_URL, "http://zcash.flypool.org/api/miner_new/t1csgRshvziESnqzp68LJbANGy2JRm86xJp/?type=json"); 
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
//$output = curl_exec($ch); 
//curl_close($ch);
//$DATA = json_decode($output, true);
//$HR = $DATA['hashRate'];
//$AVG = ($DATA['avgHashrate']/1000);
//$BALANCE = ($DATA['unpaid']/100000000);

$strAccessToken = "izEK3fPoNJsOUJW2eQ0v3En4AZJNcq4oqE/PKoBH45ZPiicl2BiASrdgoYQ0RtfZZhehS5tCWQSCZmnk2Cp/D8lef0BznJLA4aAU8vgOfeenN70Wegu5P7/C8iX1AEnZvb7VW+GSGRMGM1uhdrjGHgdB04t89/1O/w1cDnyilFU="; 
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";

if($arrJson['events'][0]['message']['text'] == "สวัสดี"){
$arrPostData = array();
$arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
$arrPostData['messages'][0]['type'] = "Guyz";
$arrPostData['messages'][0]['text'] = "Soranakiz";
}
 
$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_URL,$strUrl);
curl_setopt($ch2, CURLOPT_HEADER, false);
curl_setopt($ch2, CURLOPT_POST, true);
curl_setopt($ch2, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch2, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch2, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch2);
curl_close ($ch2);
 
?>
