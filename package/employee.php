

<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    font-weight: bold;
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
</style>
</head>
<body >

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

$sql = "SELECT * FROM OZU_EMPLOYEES";
$result = pg_query($con,$sql);

if(pg_num_rows($result)>0)
{
	echo "<table><tr><th>EMPLOYEE_ID</th><th>FIRST_NAME</th><th>LAST_NAME</th><th>EMAIL</th><th>SALARY</th><th>TOTAL_WORK_PERCENTAGE</th><th>MEMBERSHIP_COUNT</th><th>DEPARTMENT_ID</th><th>EDIT</th><th>DELETE</th></tr>";
	// output data of each row

	while($row = pg_fetch_row($result)) 
	{
        echo "<tr><td>" . $row[0]. "</td><td>" . $row[1]. "</td><td>" . $row[2]. "</td><td>" .$row[3]. "</td><td>" .$row[4]. "</td><td>" . $row[5]. "</td><td>" .$row[6]. "</td><td>" .$row[7]. "</td><td>" ."<a href='usal.php?id=".$row[0]."'>Edit</a>" . "</td><td>". "<a href='delemp.php?id=".$row[0]."'>Delete</a>"."</td></tr>";
	}
	echo "</table>";
}
else
{
	echo "0 results";
}


pg_close();
?>
</body>
</html>