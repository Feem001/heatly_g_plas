<?php

//!isset($_SESSION['admin']) ? header("location:user.php") : ""; 

$hostname = "localhost";
$username = "root";
$password = "";
$databeas_name = "heat_g++";

$conn = mysqli_connect($hostname,$username,$password,$databeas_name) or die("not connect");



?>