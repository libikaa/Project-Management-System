<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.block {
  display: block;
  width: 30%;
  border: none;
  background-color: black;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}

.block:hover {
  background-color: black;
  color: white;
}
body{
font-family: Calibri, Helvetica, sans-serif;  
  background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNXiUY7LVBqz_aTvp7FK-uxZ48wY_d_wA0Ja6Tw16bBNfiIlpkAqbfOC02aCIaobd_2Tg&usqp=CAU');  
  background-attachment: fixed;  
  background-color: #cccccc;
  height: 500px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
a {
  color: black;
  background-color: transparent;
  text-decoration: none;
  font-weight: bold;
  font-size:20px;
  }
a:hover {
  color: black;
  background-color: transparent;
  text-decoration: underline;
}

</style>
<h3 style="font-size: 25px"><center><strong>UPDATING EMPLOYEE TABLE</strong></center></h3>
  <center>
  <?php
  $id=$_GET['id'];
  echo "<tr><td><br><br><br><br><br><br><br>" . "<a href='updateempsal.php?id=$id'>UPDATE SALARY</a>" . "</td></tr><br><br><br>";
  echo "<tr><td>" . "<a href='updateemptw.php?id=$id'>UPDATE TOTAL WORK PERCENTAGE </a>" . "</td></tr><br><br><br>";
  echo "<tr><td>" . "<a href='updateempmc.php?id=$id'>UPDATE MEMBERSHIP COUNT </a>" . "</td></tr><br><br><br>";
  echo "<tr><td>" . "<a href='updateempdid.php?id=$id'>UPDATE DEPARTMENT ID </a>" . "</td></tr><br><br><br>";
?>
</center>
</body>
</html>