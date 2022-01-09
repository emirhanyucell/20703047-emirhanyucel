<?php
 
session_start();
 
session_destroy();
 
header("Location: /deneme/index.php");
 
?>