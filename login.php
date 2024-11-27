
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
<body class="bg-secondary">
<div class="container  col-5 p-5">
     <div class="card p-4 mt-5  border-3 border-warning">
          <form action="login_process.php" method="post" >
               <h2 class="text-center">เข้าสู่ระบบ</h2>
             <div class="">
               <label for="">ชื่อผู่ใช้</label>
               <input type="text" name="username" class="form-control shadow-sm">
             </div>
               <div class="">
                    <label for="">รหัสผ่าน</label>
                    <input type="password" class="form-control  shadow-sm" name="password">
               </div>
               <button type="submit" class="btn btn-warning w-100 mt-3 shadow-lg">เข้าสู่ระบบ</button>
          </form>
          <a href="rejister.php">ลงทะเบียน</a>
     </div>
</div>
</body>
</html>