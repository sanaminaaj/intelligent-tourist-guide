<html>
<head>
<title>admin</title>
<style> 
   body{
   background-image:url("h.gif");
   background-repeat:no-repeat;
   background-size:100% 100%;
   text-align:center;
   font-size:20px; 
   color:white;
  }
  </style>
</head>
<body>
<form method="get" action="delete1.php">
<?php
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
 <select name="place" id="place">
<?php
while($row=mysqli_fetch_assoc($result)){?>

<option name="place" value="<?php echo $row['name'] ?>"><?php echo $row['name']; ?></option>

<?php
}
?>
</select>
<?php
mysqli_close($conn);

?>
<!--<a href="delete1.php">delete</a>-->
<!--<button onclick="delete()">delete</button>-->
<input type="submit" value="delete">

</body>
</html>