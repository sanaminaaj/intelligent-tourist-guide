<html>
<head>
<title>admin</title>
<style> 
   body{
   background-image:url("back8");
   background-repeat:no-repeat;
   background-size:100% 100%;
   text-align:center;
   font-size:20px;
  }
table, th, td {
  border:1px solid white;
  text-align:center;
  width:100%;
}
tr:hover{
background-color:black;
}
  </style>
<link rel = "icon" href ="icon1" type = "image">
</head>
<body>
  <h1 style="color:white;background-color:black">WELCOME ADMIN...</h1>
<table>
<tr><td>
 <?php echo '<a href="addnewplace.php" style="color:white;background-color:black">ADD PLACES</a>';?> 
</td></tr>
<tr><td>
<?php echo '<a href="fetch2.php" style="color:white;background-color:black">VIEW FEEDBACK</a>';?></td></tr>
<tr><td>
<?php echo '<a href="Display.php" style="color:white;background-color:black">VIEW PLACES</a>';?>
</td></tr>
<tr><td>
<?php echo '<a href="Delete.php" style="color:white;background-color:black">DELETE PLACE</a>';?>
</td></tr>
</table>
</body>
</html>