<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student info</title>
</head>
<body>
<?php
 $dbhost = "localhost";
 $dbuser = "sohams";
 $dbpass = "FWa5vbMU1zoju)Nv";
 $db = "studentinfo";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 echo "Connected Successfully";
?>

  
</body>
</html>