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

$access_token = 'izEK3fPoNJsOUJW2eQ0v3En4AZJNcq4oqE/PKoBH45ZPiicl2BiASrdgoYQ0RtfZZhehS5tCWQSCZmnk2Cp/D8lef0BznJLA4aAU8vgOfeenN70Wegu5P7/C8iX1AEnZvb7VW+GSGRMGM1uhdrjGHgdB04t89/1O/w1cDnyilFU=';
if (!is_null($DATA['DATA'])) {
	// Loop through each event
	foreach ($DATA['DATA'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];

			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => $text
			];

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
		}
	}
}
        ?>
