
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
<body class=" bg-secondary ">
<div class="container col-6 ">
     <div class="card p-3  border border-4 border-warning  mt-3">
          <form action="process.php" method="post" >
               <h2 class="text-center">ลงทะเบียน</h2>
          <label for="">ชื่อ-นามสกุล</label>
               <div class="input-group">
                    <input type="text" class="form-control shadow-sm" name="name" placeholder="ชื่อ">
                    <input type="text" class="form-control  shadow-sm " name="lname" placeholder="นามสกุล">
               </div>
               <div class="col-6">
                    <label for="">วันเกิด</label>
                    <input type="date" class="form-control  shadow-sm" name="date">
               </div>
               
               <div class="">
                    <label for="">เบอร์</label>
                    <input type="tel" class="form-control  shadow-sm" name="tel">
               </div>
               
               <div class="">
                    <label for="">E-mail</label>
                    <input type="e-mail" class="form-control  shadow-sm" name="mail">
               </div>
               
               <div class="">
                    <label for="">ชื่อผู่ใช้</label>
                    <input type="text" class="form-control  shadow-sm" name="username">
               </div>
               
               <div class="">
                    <label for="">รหัสผ่าน</label>
                    <input type="password" class="form-control  shadow-sm" name="pass">
               </div>
               
               <div class="">
                    <label for="">ยืนยันรหัสผ่าน</label>
                    <input type="password" class="form-control  shadow-sm" name="cpass">
               </div>
               <button type="submit" class="btn btn-warning w-100 mt-3  shadow-lg">ลงทะเบียน</button>
          </form>
          <a href="login.php">เข้าสู่ระบบ</a>
     </div>
</div>
</body>
</html>