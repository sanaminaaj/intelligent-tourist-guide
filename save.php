<?php
    $name = $_POST['username'];
    $email = $_POST['password'];
    if($name=="admin" && $email=="admin")
    {
     echo "successfully logged in";
    }?>
    <br>
    <a href="add.html" style="color:black;">Add New Place</a>
    <form method="post" action="view.php">
      <h3>To view Feedback click here</h3>
      <input type="submit" value="view feedback">
    </form>
<?php
?>