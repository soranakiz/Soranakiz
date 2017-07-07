
<?php
$access_token = 'izEK3fPoNJsOUJW2eQ0v3En4AZJNcq4oqE/PKoBH45ZPiicl2BiASrdgoYQ0RtfZZhehS5tCWQSCZmnk2Cp/D8lef0BznJLA4aAU8vgOfeenN70Wegu5P7/C8iX1AEnZvb7VW+GSGRMGM1uhdrjGHgdB04t89/1O/w1cDnyilFU=';
$ch = curl_init(); 
        // set url สำหรับดึงข้อมูล 
        curl_setopt($ch, CURLOPT_URL, "http://zcash.flypool.org/api/miner_new/t1csgRshvziESnqzp68LJbANGy2JRm86xJp/?type=json"); 
        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        // ตัวแปร $output เก็บข้อมูลทั้งหมดที่ดึงมา 
        $output = curl_exec($ch); 
      
    	// ปิดการเชื่อต่อ
        curl_close($ch);    
        // output ออกไปครับ
        echo $output;
?>
