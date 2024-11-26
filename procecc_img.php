<?php

$conn  = mysqli_connect("localhost","root","","heat_g++") or die("not connect");





$img = $_FILES['name']['name'];
$tmp_img = $_FILES['name']['tmp_name'];
$uplode = "uplode/".$img;
$sql = "INSERT INTO `image`(`id`, `ima`) VALUES (null,'$img')";
$query = mysqli_query($conn,$sql);
move_uploaded_file($tmp_img,$uplode);
header("location:a.php");



?>