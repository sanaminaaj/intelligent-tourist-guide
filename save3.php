<head>
<style>
body{
background-image:url("back5");
background-repeat: no-repeat;
     text-align:center;
     color: black;
    background-size: 100% 100%;
}
</style>
</head>
<?php
  $db_hostname= "127.0.0.1";
  $db_username= "root";
  $db_password= "";
  $db_name= "tourist";
  $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
  if(!$conn){
  echo "Connection failed".mysqli_Connect_error();
exit;
}
  $user=$_POST['user'];
  $feedback=$_POST['feedback'];
$sql="insert into feedback(user,feed) VALUES('$user','$feedback')";
$result= mysqli_query($conn,$sql);
if(!$result){
  echo "Error:" .mysqli_error($conn);
  exit;
}?>
<body>
<h2  style="color:green;">Your Feedback</h2>
<h3 style="color:white;"><?php echo $feedback ?>has been successfully saved</h3>
<h3 style="color:green;">Thank you for your valuable feedback</h3>
</body>
<?
mysqli_close($conn);
?>