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
  $sql="CALL p_t_ozu_tasks_insert('".$_POST["tid"]."','".$_POST["tname"]."','".$_POST["tstatus"]."','".$_POST["sdat"]."','".$_POST["edat"]."','".$_POST["pid"]."','".$_POST["cid"]."')";
  if(pg_query($con,$sql))
  {
    header("location: inserttask.php?inserted=1");
    header("location: adtask.php");
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

label
{
  font-size: 20px;
}
</style>
<body>

<h3 style="font-size: 25px"><center><strong>INSERTING IN TASK TABLE</strong></center></h3>

<div class="container box">
  <form method ="post" action="">
    <div class="form-group"><center><strong>
      <label>Enter the task id<pre></pre></label>
      <input style="background-color: rgba(100,100,100,0); " type="text" name="tid" id="tid" class="form-contanier"></center>
    </div>
    <div class="form-group"><center>
      <label>Enter the task name<pre></pre></label>
      <input style="background-color: rgba(100,100,100,0); " type="text" name="tname" id="tname" class="form-contanier"></center>
    </div>
    <br />
    <div class="form-group"><center>
      <label>Enter the task status<pre></pre></label>
      <input style="background-color: rgba(100,100,100,0); " type="text" name="tstatus" id="tsatus" class="form-contanier"></center>
    </div>
    <br />
    <div class="form-group"><center>
      <label>Enter the task start date<pre></pre></label>
      <input style="background-color: rgba(100,100,100,0); " type="text" name="sdat" id="sdat" class="form-contanier"></center>
    </div>
    <br />
    <div class="form-group"><center>
      <label>Enter the task end date<pre></pre></label>
      <input style="background-color: rgba(100,100,100,0); " type="text" name="edat" id="edat" class="form-contanier"></center>
    </div>
    <br />
    <div class="form-group"><center>
      <label>Enter the project id<pre></pre></label>
      <input style="background-color: rgba(100,100,100,0); " type="text" name="pid" id="pid" class="form-contanier"></center>
    </div>
    <br />
    <div class="form-group"><center>
      <label>Enter the coordinator id<pre></pre></label>
      <input style="background-color: rgba(100,100,100,0); " type="text" name="cid" id="cid" class="form-contanier"></center>
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