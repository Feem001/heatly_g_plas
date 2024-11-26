<?php


$conn = mysqli_connect("localhost","root","","test") or die("not connect");






function c($data1,$data2,$data3){
     $insert = "INSERT INTO `data_test`(`id`, `userneme`, `password`, `tel`) VALUES (null,'$data1','$data2','$data3')";
     $sql = mysqli_query($conn,$insert);
     return $sql;
}

function row($conn,$name){
     $read = "SELECT * FROM `data_test` WHERE  userneme LIKE '%$name%'";
     $sqli = mysqli_query($conn,$read);
     return $sqli;
}

function r($conn){
     $select = "SELECT * FROM `data_test`";
     $sql = mysqli_query($conn,$select);
     return $sql;
}

function u($data1,$data2,$data3,$id){
     $update = "UPDATE `data_test` SET `userneme`='$data1',`password`='$data2',`tel`='$data3' WHERE $id";
     $sql = mysqli_query($conn,$update);
     return $sql;
}

function d($id){
     $dalete = "DELETE FROM `data_test` WHERE $id";
     $sql = mysqli_query($conn,$dalete);
     return $sql;
}






?>