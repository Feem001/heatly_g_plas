<?php
include "conn.php";


$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);

$sql = "SELECT * FROM `member` WHERE username = '$username' AND password = '$password'";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($query);

if($row['status'] == "0"){
     header("location:user.php");
}elseif($row['status'] == "1"){
     header("location:admin/admin_index.php");
}else{
     header("location:login.php");
}


?>