<?php
$ch = curl_init(); 
        // set url สำหรับดึงข้อมูล 
        curl_setopt($ch, CURLOPT_URL, "http://zcash.flypool.org/api/miner_new/t1csgRshvziESnqzp68LJbANGy2JRm86xJp/?type=json"); 
        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        // ตัวแปร $output เก็บข้อมูลทั้งหมดที่ดึงมา 
        $output = curl_exec($ch); 
      
    	// ปิดการเชื่อต่อ
        curl_close($ch);    
        $DATA= json_decode($output, true);
        $DATA['hashRate']*1000;
        $DATA['unpaid']/100000000;
        echo "ความเร็วในการขุดปัจจุบัน : ".$DATA['hashRate']."<br>";
        echo "ความเร็วในการขุดเฉลี่ย : ".$DATA['avgHashrate']."H/s<br>";
        echo "ZEC ในบัญชี : ".$DATA['unpaid']."<br>";
        echo "หลัง""<br>";

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('<channel izEK3fPoNJsOUJW2eQ0v3En4AZJNcq4oqE/PKoBH45ZPiicl2BiASrdgoYQ0RtfZZhehS5tCWQSCZmnk2Cp/D8lef0BznJLA4aAU8vgOfeenN70Wegu5P7/C8iX1AEnZvb7VW+GSGRMGM1uhdrjGHgdB04t89/1O/w1cDnyilFU=>');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '<channel secret>']);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
$response = $bot->replyMessage('<replyToken>', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();

?>
