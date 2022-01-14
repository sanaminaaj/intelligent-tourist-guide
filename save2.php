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
  $name=$_POST['name'];
  $address=$_POST['address'];
  $image=$_FILES['image']['name'];
  $area=$_POST['area'];
  $tags=$_POST['tags'];
  $description=$_POST['description'];
$sql="insert into addplace(name,address,image,area,tags,description) VALUES('$name','$image','$address','$area','$tags','$description')";
$result= mysqli_query($conn,$sql);
if(!$result){
  echo "Error:" .mysqli_error($conn);
  exit;
}
echo "Registration successful";
mysqli_close($conn);
?>