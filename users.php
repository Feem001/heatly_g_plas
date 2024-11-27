<?php
session_start();
include "conn.php";

$row = array( 
     "fneme"=>" ",
     "lneme"=>" ",
     "date"=>" ",
     "tal"=>" ",
     "e-mail"=>" ",
     "username"=>" ",
     "password"=>"",

);


if(isset($_SESSION['login'])){
     $id = $_SESSION['login'];
     $sql = "SELECT * FROM `member` WHERE id = '$id'";
     $query = mysqli_query($conn,$sql);
     $row = mysqli_fetch_assoc($query); 

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
<div class="container col-6 ">
     <button  class="btn btn-info m-2" onclick="history.back()">กลับ</button>
     <div class="card p-3  border border-4 border-secondary  mt-3 shadow-lg">
          <form action="" method="post" >
               <h2 class="text-center">แก้ไขข้อมูล</h2>
          <label for="">ชื่อ-นามสกุล</label>
               <div class="input-group">
                    <input type="text" class="form-control shadow-sm" value="<?php echo $row['fneme'] ?> "  name="name" placeholder="ชื่อ">
                    <input type="text" class="form-control  shadow-sm " value="<?php echo $row['lneme'] ?> "  name="lname" placeholder="นามสกุล">
               </div>
               <div class="col-6">
                    <label for="">วันเกิด</label>
                    <input type="date" class="form-control  shadow-sm" name="date" value="<?php echo $row['date'] ?> ">
               </div>
               
               <div class="">
                    <label for="">เบอร์</label>
                    <input type="tel" class="form-control  shadow-sm" name="tel" value="<?php echo $row['tal'] ?> ">
               </div>
               
               <div class="">
                    <label for="">E-mail</label>
                    <input type="e-mail" class="form-control  shadow-sm" name="mail" value="<?php echo $row['e-mail'] ?> ">
               </div>
               
               <div class="">
                    <label for="">ชื่อผู่ใช้</label>
                    <input type="text" class="form-control  shadow-sm" name="username" value="<?php echo $row['username'] ?> ">
               </div>
               
               <div class="">
                    <label for="">รหัสผ่าน</label>
                    <input type="password" class="form-control  shadow-sm" name="pass" value="<?php echo $row['password'] ?>">
               </div>
               <button type="submit" class="btn btn-danger w-100 mt-3  shadow-lg">อัปเดต</button>
          </form>
     </div>
</div>
<?php include "chat.php" ?>
<?php include "footer.php" ?>

</body>
</html>