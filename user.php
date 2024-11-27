<?php
session_start();
include "conn.php";


if(isset($_SESSION['login'])){
     $id = $_SESSION['login'];
     $sqli = mysqli_query($conn,"SELECT * FROM `member` WHERE id = '$id'");
     $row = mysqli_fetch_assoc($sqli);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
     <script type="text/javascript" src="jquery-3.7.1.min.js"></script>
     <script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
     <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
     <div class="bg-secondary p-2">
          <div class="container text-end">
          <?php if(isset($_SESSION['login'])){ ?>
               <a href="logout.php" class="btn btn-outline-warning">ออกจากระบบ</a>
          <?php   }else{  ?>
               <a href="login.php"  class="text-dark">เข้าสู่ระบบ</a>| <a href="rejister.php" class="text-dark">สมัครสมาชิก</a>

               <?php } ?>

          </div>
     </div>
    <div class="nav-bg">
    <nav class="navbar navbar-brand">
          <div class="container">
          <img src="รอบภาค/โลโก้/โลโก้เต็ม.png" width="180px" alt="">
               <ul class="nav">
                    <li class="nav-item"><a href="" class="nav-link  li-btn text-dark"><img src="รอบภาค/ไอคอน/หน้าแรก2.png" width="30px" alt="">หน้าแรก</a></li>
                    <li class="nav-item"><a href="" class="nav-link  li-btn  text-dark"><img src="รอบภาค/ไอคอน/รูปภาพ.png" width="30px" alt="">ประชาสัมพันธ์</a></li>
                    <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle   text-dark  li-btn" data-bs-toggle="dropdown" type="button"><img src="รอบภาค/ไอคอน/โปรโมชัน2.png" width="30px" alt="">ผลิตภัณฑ์</a>
               <ul class="dropdown-menu p-3">
                    <li><a href="news.php" class="dropdown-item  li-btn">ผลิตภัณฑ์วิตตามิน</a></li>
                    <li><a href="more.php" class="dropdown-item mt-2  li-btn">ผลิตภัณฑ์อื่นๆ</a></li>
               </ul>
               </li>
                    <li class="nav-item"><a href="chat_user.php" class="nav-link  li-btn  text-dark"><img src="รอบภาค/ไอคอน/สามคน.png" width="30px" alt="">สนทนา</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link  li-btn  text-dark"><img src="รอบภาค/ไอคอน/เกี่ยวกับเรา2.png" width="30px" alt="">เกื่ยวกับเรา</a></li>
               </ul>
               <a href="users.php" class="li-btn p-2"><img src="รอบภาค/ไอคอน/คนเดียว.png"  alt="" width="50px"></a>
          </div>

     </nav>
     
    </div>
    <div class="container">
     <div class="row border-info  p-5">
          <div class="col-5">
          <div class="">
          <div class="card mt-2 text-center shadow-lg  text-center">
          <b>....ประชาสัมพันธ์...</b>
          <hr>
          <marquee behavior="scroll" direction="up" height="350px"><p class="me-3">ดูแลสูขภาพ</p></marquee>
          </div>
          
     </div>  

          </div>
          
           <div class="col-7">
               <img src="โปรโมชัน.png" class="w-100" alt="">
          </div>
     </div>
    </div>

    <div class="container col-6 text-center">
       
     
</div>
<div class="container mt-3">
     <div class="row">
          <div class="col-4 p-5">
               <div class="card shadow p-3 text-center">
               <h2>ผู้เข้าชมวันนี้</h2>
               <h1>121 คน</h1>
               </div>
          </div>
          <div class="col-4 p-5">
               <div class="card p-3  shadow text-center">
               <h2>ผู้เข้าชมสัปดาห์นี้</h2>
               <h1>1,091 คน</h1>
               </div>
          </div>
          <div class="col-4 p-5">
               <div class="card p-3  shadow text-center">
               <h2>ผู้เข้าชมเดือนนี้</h2>
               <h1>10,215 คน</h1>
               </div>
          </div>
          <div class="col-12 p-5">
               <div class="card p-3  shadow text-center">
               <h2>ผู้เข้าชมทั้งหมด</h2>
               <h1>291,091 คน</h1>
               </div>
          </div>
     </div>
</div>
    <?php  include "chat.php" ?>
    <?php include "footer.php" ?>
</body>
</html>