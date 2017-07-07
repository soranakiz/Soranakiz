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
        echo "ทดสอบตัวแปร workers".$DATA['name']."<br>";
        ?>
