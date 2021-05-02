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
  $id=$_GET['id'];
  $sql="CALL p_t_ozu_depts_update_head($id,'".$_POST["wp"]."')";
  if(pg_query($con,$sql))
  {
    header("location: updateprojwp.php?updated=1");
  }
}
if(isset($_GET["updated"]))
{
  echo '<script>alert("Project work percentage updated")</script>';
}
?>
<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>UPDATING IN PROJECT TEAM TABLE</h3>

<div class="container box">
  <form method ="post" action="">
    <div class="form-group">
      <label>Enter the work percentage to be updated</label>
      <input type="text" name="wp" id="wp" class="form-contanier">
    </div>
    <br />
    <div class="form-group">
      <input type="submit" name="insert_btn" class="btn btn-info">
    </div>
  </form>

</div>

</body>
</html>