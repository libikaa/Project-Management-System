<?php
$host = "localhost";
$user = "postgres";
$pass = "kannan05";
$db = "package";
$id = $_GET['id'];
//Connect DB
//Create query based on the ID passed from you table
//query : delete where Staff_id = $id
// on success delete : redirect the page to original page using header() method
$conn = pg_connect("host=$host dbname=$db user=$user password=$pass")
           or die ("could not connect to server\n");
// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql =  "CALL p_t_ozu_emp_delete_emp($id)";; 
if (pg_query($conn, $sql)) 
{
    pg_close($conn);
    header('Location: ademployee.php'); //If book.php is your main page where you list your all records
    exit;
} 
else 
{
    echo "Error deleting record";
}