<?php
  $db_hostname= "127.0.0.1";
  $db_username= "root";
  $db_password= "";
  $db_name= "tourist";
  
  $conn=mysqli_connect($db_hostname,'
$db_username,$db_password,$db_name);
  if(!$conn){
  echo "Connection failed".mysqli_Connect_error();
exit;
}
$sql="SELECT * FROM feedback";
$result= mysqli.query($conn,$sql);
if(!$result){
  echo "Error:" .mysqli_error($conn);
  exit;
}
while($row=mysqli_fetch_assoc($result)){
echo $row['user'];
echo $row['feed'];
 }
mysqli_close($conn);

?>