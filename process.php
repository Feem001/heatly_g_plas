<?php

include "crud.php";


if($_POST['pass'] == $_POST['cpass']){
     $insert = c($conn,cheak($_POST['name']),cheak($_POST['lname']),cheak($_POST['tel']),cheak($_POST['date']),cheak($_POST['mail']),cheak($_POST['username']),cheak($_POST['pass']));
};


function cheak($data){
     $data = htmlspecialchars($data);
     $data = trim($data);
     $data = stripcslashes($data);
     return $data;
}





?>