<?php
$host = "localhost";
$user = "postgres";
$pass = "kannan05";
$db = "package";

// Create connection
$con = pg_connect("host=$host dbname=$db user=$user password=$pass")
           or die ("could not connect to server\n");
// Check connection
if (!$con) {
    die("Connection failed: " . $con->connect_error);
}
if(isset($_POST["insert_btn"]))
{
  $sql="CALL p_t_ozu_emp_insert('".$_POST["eid"]."','".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["email"]."','".$_POST["salary"]."','".$_POST["per"]."','".$_POST["memcount"]."','".$_POST["did"]."')";
  if(pg_query($con,$sql))
  {
    header("location: insertemp.php?inserted=1");
    header("location: ademployee.php");
  }
}
if(isset($_GET["inserted"]))
{
  echo '<script>alert("Data inserted")</script>';
}
?>
<!DOCTYPE html>
<html>
<style>
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

input[type=text], select {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid black;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 30%;
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: black;
}

label{
  font-size: 20px;
}

</style>
<body>

<center><h3 style="font-size: 25px"><strong>INSERTING IN EMPLOYEE TABLE</strong></h3></center>

<div class="container box">
  <form method ="post" action="">
    <div class="form-group"><center><strong>
      <label>Enter the employee id<pre></pre></label>
      <input style="background-color: rgba(100,100,100,0); " type="text" name="eid" id="eid" class="form-contanier"></center>
    </div>
    <div class="form-group"><center>
      <label>Enter the first name<pre></pre></label>
      <input style="background-color: rgba(100,100,100,0); " type="text" name="fname" id="fname" class="form-contanier"></center>
    </div>
    <br />
    <div class="form-group"><center>
      <label>Enter the last name<pre></pre></label>
      <input style="background-color: rgba(100,100,100,0); " type="text" name="lname" id="lname" class="form-contanier"></center>
    </div>
    <br />
    <div class="form-group"><center>
      <label>Enter the email<pre></pre></label>
      <input style="background-color: rgba(100,100,100,0); " type="text" name="email" id="email" class="form-contanier"></center>
    </div>
    <br />
    <div class="form-group"><center>
      <label>Enter the salary<pre></pre></label>
      <input style="background-color: rgba(100,100,100,0); " type="text" name="salary" id="salary" class="form-contanier"></center>
    </div>
    <br />
    <div class="form-group"><center>
      <label>Enter the total work percentange<pre></pre></label>
      <input style="background-color: rgba(100,100,100,0); " type="text" name="per" id="per" class="form-contanier"></center>
    </div>
    <br />
    <div class="form-group"><center>
      <label>Enter the membershipcount<pre></pre></label>
      <input style="background-color: rgba(100,100,100,0); " type="text" name="memcount" id="memcount" class="form-contanier"></center>
    </div>
    <br />
    <div class="form-group"><center>
      <label>Enter the department id<pre></pre></label>
      <input style="background-color: rgba(100,100,100,0); " type="text" name="did" id="did" class="form-contanier"></center>
    </div>
    <br />
    <div class="form-group"><center>
      <input type="submit" name="insert_btn" class="btn btn-info"></center>
    </div>
    <br />

  </form>

</div>

</body>
</html>