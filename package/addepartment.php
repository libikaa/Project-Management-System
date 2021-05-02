
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 170px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
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
</style>
</head>
<body >

<div class="sidenav">
  <a href="ademployee.php">Employee</a>
  <a href="addepartment.php">Department</a>
  <a href="adproject.php">Project</a>
  <a href="adprojectteam.php">Project teams</a>
  <a href="adtask.php" >Task</a>
  <a href="ademptask.php">Employee task</a>
  <a href="login.php">Logout</a>
  

</div>
<center><h1>DEPARTMENT TABLE</h1></center>
</head>
<body>
  <br><br><br><br><br><br><br>
  <center><button class="block" onclick="location.href='insertdep.php'">INSERT DEPARTMENT</button></center>
  <br><br><br><br>
  <center><button class="block" onclick="location.href='department.php'">VIEW DEPARTMENT</button></center>
</body>
</html>