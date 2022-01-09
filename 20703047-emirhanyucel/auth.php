<?php

session_start();

$DB_SERVER = "localhost";
$DB_USERNAME = "root";
$DB_PASSWORD = '';
$DB_NAME = "panel";
 
$con = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

if ( mysqli_connect_errno() ) {
	exit("Bağlantı hatası.");
}

$username = $_POST['username'];  
$password = $_POST['password'];  

      
$sql = "select * from giris where username = '$username' and password = '$password' ";  
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  


if($count == 1){  
    $_SESSION["login"] = "True"; 
    $_SESSION["username"] = $username; 
    header("Location: panel.php");
}  
else{    
    header("Location: index.php");
}  

?>  