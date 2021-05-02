<?php
   $host = "localhost";
   $user = "postgres";
   $pass ="kannan05";
   $db  = "package";

   $con = pg_connect("host=$host dbname=$db user=$user password=$pass")
           or die ("could not connect to server\n");

   if(!$con)
   {
         echo "Error:unable to open database\n";
   }
   if(isset($_POST["login_btn"])) 
   {
         $name = $_POST['name'];
         $password = $_POST['pass'];  
         $query = "SELECT * FROM admintable WHERE USERNAME='$name' and USER_PASSWORD='$password'";
         $result = pg_query($con, $query);
         $count=pg_num_rows($result);   
         if($count==1)
         {
            header("Location: admin.php?id=".$name."");   
         }
         else
         {
            echo "Your login name or password is invalid";
         }
   }
   pg_close($con)
?>
<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
Body {  
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
button {   
       background-color: blue;   
       width: 100%;  
       color: orange;  
       padding: 15px;
       margin: 10px 0px;
       border: none;        
       cursor: pointer;   
         }   
 input[type=text], input[type=password] {   
        width: 40%; 
        margin: 18px 0;
        padding: 12px 20px;
        display: inline-block;
        border: 2px solid black;
        box-sizing: border-box;     
    }  
 button:hover {   
        opacity: 1.2;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 25px;   
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
<body>    
    <center> <h1 style="font-size: 40px"> Login form </h1> </center>   
    <div class="container box">
         <form method ="post" action="">
         <div class="form-group">
            <center><label style="font-size:30px"><strong>Username:</strong></label></center>
            <center><input style="background-color: rgba(100,100,100,0); " type="text" name="name" id="name" class="form-container"></center>
         </div>
         <br />
         <div class="form-group">
            <center><label style="font-size:30px"><strong>Password:</strong></label></center>
            <center><input style="background-color: rgba(100,100,100,0); " type="password" name="pass" id="pass" class="form-container"></center>
         </div>
         <br />
         <div class="form-group">
            <center><input style="size: 20px" type="submit" name="login_btn" class="btn btn-info"></center>
         </div>
         </form>
    </div>
</body>     
</html>