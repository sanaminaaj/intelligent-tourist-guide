<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<title>ADMIN</title>
  <style> 
   body{
   background-image:url("log.jpg");
   background-repeat:no-repeat;
   background-size:100% 100%;
   text-align:center;
   font-size:20px;
  }
  </style>
</head>
<body>
<form action="admin2.php" method="post">
<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<u><label>ADMIN  LOGIN</label><br><br></h1></u>
username:<input type="text" name="username" required><br><br>
password:<input type="password" name="password" required><br><br>
   <? php 
    $name = $_POST['username'];
    $email = $_POST['password'];
    if($name=="admin" && $password=="admin")
    {?>
     <input type="submit" class="btn btn-outline-danger" value="login">
<?php}
    ?>

</form>
</body>
