<html>
<head>
<title>display</title>
<style> 
   body{
   background-image:url("back");
   background-repeat:no-repeat;
   background-size:100% 100%;
   text-align:center;
   font-size:20px;
  }
  </style>
</head>
<body><?php
  $db_hostname= "127.0.0.1";
  $db_username= "root";
  $db_password= "";
  $db_name= "tourist";
  
  $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
  if(!$conn){
  echo "Connection failed".mysqli_connect_error();
  exit;
  }
$sql="SELECT * FROM addplace";
$result= mysqli_query($conn,$sql);
if(!$result){
  echo "Error:" .mysqli_error($conn);
  exit;
}
?>
<h2 style="color:white;background-color:black;text-align:center;">PLACES</h2>
<?php
while($row=mysqli_fetch_assoc($result)){
echo "<h2>Name of the Place:".$row['name']."</h2><br>";
echo "<h3>Address of the Place:".$row['address']."</h3><br>";
echo "<h4>Area:".$row['area']."</h4><br>";
echo "<h3>Description:".$row['description']."</h2><br>";
}
mysqli_close($conn);
?>
</body>
</html>