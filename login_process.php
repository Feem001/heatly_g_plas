<?php


$username = $_POST['username'];
$password = $_POST['password'];

$sql = "";
$query = mysqli_query();

if(row['status'] == "0"){
     header("location:user.php");
}elseif(row['status'] == "1"){
     header("location:admin.php");
}else{
     header("location:login.php");
}


?>