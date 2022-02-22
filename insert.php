<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<html>
<body>
<?php
include "connection.php";
if(isset($_POST['SubmitButton'])){ 
  $rollno =  $_REQUEST['sid'];
  $first_name =  $_REQUEST['fname'];
  $last_name = $_REQUEST['lname'];
  $email = $_REQUEST['email'];
  $sql = "INSERT INTO student (sid, fname, lname, email)
  values( '$rollno', '$first_name', '$last_name', '$email' )";
  if (mysqli_query($conn, $sql)) {
    echo "<br>New record inserted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}  
?> 
</body>
</html>

</body>
</html>