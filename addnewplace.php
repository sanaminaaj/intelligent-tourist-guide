<html>
  <head>
    <title>ADD PLACES</title>
    <style>
    body{
    background-image:url("falls");
     background-repeat: no-repeat;
     text-align:center;
     color: black;
    background-size: 100% 100%;
    } 
    </style>
</head>
  <body>
<form method="post" action="db.php"
enctype="multipart/form-data">
<h1 style="color:pink">ADD PLACES
      <a href="login.html">logout</a></h1>
      Name<input type="text" name="name" required><br><br>
      Address
<select type="text" name="address" required>
    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
    <option value="Andhra Pradesh">Andhra Pradesh</option>
    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
    <option value="Assam">Assam</option>
    <option value="Bihar">Bihar</option>
    <option value="Chandigarh">Chandigarh</option>
    <option value="Chhattisgarh">Chhattisgarh</option>
    <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
    <option value="Daman and Diu">Daman and Diu</option>
    <option value="Delhi">Delhi</option>
    <option value="Goa">Goa</option>
    <option value="Gujarat">Gujarat</option>
    <option value="Haryana">Haryana</option>
    <option value="Himachal Pradesh">Himachal Pradesh</option>
    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
    <option value="Jharkhand">Jharkhand</option>
    <option value="Karnataka">Karnataka</option>
    <option value="Kerala">Kerala</option>
    <option value="Ladakh">Ladakh</option>
    <option value="Lakshadweep">Lakshadweep</option>
    <option value="Madhya Pradesh">Madhya Pradesh</option>
    <option value="Maharashtra">Maharashtra</option>
    <option value="Manipur">Manipur</option>
    <option value="Meghalaya">Meghalaya</option>
    <option value="Mizoram">Mizoram</option>
    <option value="Nagaland">Nagaland</option>
    <option value="Odisha">Odisha</option>
    <option value="Puducherry">Puducherry</option>
    <option value="Punjab">Punjab</option>
    <option value="Rajasthan">Rajasthan</option>
    <option value="Sikkim">Sikkim</option>
    <option value="TamilNadu">TamilNadu</option>
    <option value="Telangana">Telangana</option>
    <option value="Tripura">Tripura</option>
    <option value="Uttar Pradesh">Uttar Pradesh</option>
    <option value="Uttarakhand">Uttarakhand</option>
    <option value="West Bengal">West Bengal</option>
</select><br><br>
      Area<input type="text" name="area" required>
					<br><br>
      Tags<input type="text" name="tags" required><br><br>
      Map<input type="text" name="map" required><br><br>
      Image<input type="file" name="image" required>
<br><br>
      Description<textarea name="description" cols="50" rows="20"       required></textarea><br><br>
      <input type="submit" value="save">
</form>
 
     </body>
</html>
    