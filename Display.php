<html>
<head>
<title>display</title>
<style> 
   body{
   background-image:url("back12");
   background-repeat:no-repeat;
   background-size:100% 100%;
   text-align:center;
   font-size:20px;
   color:white;
  }
  </style>
<link rel = "icon" href ="icon1" type = "image">
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
$sql="SELECT * FROM addnewplace";
$result= mysqli_query($conn,$sql);
if(!$result){
  echo "Error:" .mysqli_error($conn);
  exit;
}
?>
<h2 text-align:center>PLACES</h2>
<?php
while($row=mysqli_fetch_assoc($result)){
echo "<h3>".$row['name']."</h3>";
echo "<h4>".$row['address']."</h4><br>";
echo "<img height='500' width='700' src='".$row['image']."'><br>";
echo $row['area']."<br>";?>
<a href="<?php echo $row['tags']; ?>">Click here to know more</a><br>
<a href="<?php echo $row['map']; ?>">view map</a><br>
<?php
echo $row['description']."<br>";
?>
<hr>
<?php
}
mysqli_close($conn);

?>
</body>
</html>