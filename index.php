
<!DOCTYPE html>                    
<head>
<title>ดึงข้อมูลสภาพอากาศ</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css" >
<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
<script src="js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 

  
  <script>
  
  
    $(document).ready(function(){
    
    
    var dataget;
    
          $.ajax({
   url: 'getapi.php',
   data: {
      format: 'json'
   },
   error: function() {
      alert("ไม่สามารถดึงข้อมูลได้");
   },
   dataType: 'json',
   success: function(data) {
   
    
    // console.log(data.Stations[0]);
   
   dataget = data;
   var newhtml = '<p>HashRate : '+dataget['hashRate']+</p>';

   type: 'GET'
    
