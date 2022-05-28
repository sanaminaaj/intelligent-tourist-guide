<?php
  $db_hostname= "127.0.0.1";
  $db_username= "root";
  $db_password= "";
  $db_name= "tourist";
  
  $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
  if(!$conn)
  {
  echo "Connection failed".mysqli_Connect_error();
  exit;
  }
$name=$_GET['place'];
$sql="DELETE from addnewplace where name='$name'";
$result= mysqli_query($conn,$sql);
if(!$result){
  echo "Error:" .mysqli_error($conn);
  exit;
}
mysqli_close($conn);
?>
<h3>Deleted successfully</h3>