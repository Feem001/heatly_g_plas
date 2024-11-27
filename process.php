<?php
include "conn.php";



$name = cheak($_POST['name']);
$lname = cheak($_POST['lname']);
$mail = cheak($_POST['mail']);
$date = cheak($_POST['date']);
$tel = cheak($_POST['tel']);
$username = cheak($_POST['username']);
$password = cheak($_POST['pass']);
//$status = cheak($_POST['']);
//$sex = cheak($_POST['']);



$sqli = "INSERT INTO `member`(`id`, `fneme`, `lneme`, `e-mail`, `date`, `tal`, `username`, `password`, `status`, `sex`) VALUES (null,'$name','$lname','$mail','$date','$tel','$username','$password',0,'man')";
$query = mysqli_query($conn,$sqli);
if($query){
     echo "ok";
}else{
     echo "not";
}





function cheak($data){
     $data = htmlspecialchars($data);
     $data = trim($data);
     $data = stripcslashes($data);
     return $data;
}





?>