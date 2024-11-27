<?php
session_start();
include "conn.php";



$name = cheak($_POST['name']);
$lname = cheak($_POST['lname']);
$mail = cheak($_POST['mail']);
$date = cheak($_POST['date']);
$tel = cheak($_POST['tel']);
$username = cheak($_POST['username']);
$password = cheak($_POST['pass']);
$status = 0;
$sex = 'man';



$sqli = "INSERT INTO `member`(`id`, `fneme`, `lneme`, `e-mail`, `date`, `tal`, `username`, `password`, `status`, `sex`) VALUES (null,'$name','$lname','$mail','$date','$tel','$username','$password',$status,'$sex')";
$query = mysqli_query($conn,$sqli);

if($query){
     $sql = "SELECT * FROM `member`";
     $q = mysqli_query($conn,$sql);
     $row = mysqli_fetch_assoc($q);
     $_SESSION['login'] = $row['id'];
     header("location:user.php");
}else{
     header("location:rejister.php");
}





function cheak($data){
     $data = htmlspecialchars($data);
     $data = trim($data);
     $data = stripcslashes($data);
     return $data;
}





?>