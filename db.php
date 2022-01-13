<head>
<style>
body{
background-image:url("back6");
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
  $name=$_POST['name'];
  $address=$_POST['address'];
  $area=$_POST['area'];
  $tags=$_POST['tags'];
  $map=$_POST['map'];
  $image=$_FILES['image']['name'];
  $description=$_POST['description'];
$sql="insert into addnewplace(name,address,area,tags,image,description,map) VALUES('$name','$address',' $area','$tags','$image','$description','$map')";
$result= mysqli_query($conn,$sql);
if(!$result){
  echo "Error:" .mysqli_error($conn);
  exit;
}?>
<h2 style="background-color:white;">Registration successful</h2>
<?php
mysqli_close($conn);
?>