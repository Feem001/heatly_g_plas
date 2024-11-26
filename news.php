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
     <?php  include "nav.php" ?>
     <div class="container">
          <div class="row">
               <div class="col-4 p-3 ">
                    <div class="card p-3 border-light shadow  dbb">
                         <img src="รอบภาค/ผลิตภัณฑ์/สมอง.png" class="w-100 p-3 " alt="">
                         <b>ราคา 399 บาท</b>
                         <div class="card-body">
                              <p>วิตามินบี มีความสามารถในการเพิ่มประสิทธิภาพในการเผาผลาญไขมัน ไม่ว่าจะ.......</p>

                         </div>
                         <a href="product.php" class="btn btn-primary w-100">เพิ่มเติม</a>
                    </div>
               </div>
               <div class="col-4  p-3 ">
                    <div class="card p-3  border-light shadow dbb ">
                         <img src="รอบภาค/ผลิตภัณฑ์/หัวใจ.png" class="w-100 p-3" alt="">
                         <b>ราคา 399 บาท</b>
                         <div class="card-body">
                              <p>กลือแร่มีคุณสมบัติในการทดแทนน้ำ และแร่ธาตุที่เสียไปได้ ช่วยควบคุม......</p>
                         </div>
                         <a href="product.php"  class="btn btn-primary w-100">เพิ่มเติม</a>
                    </div>
               </div>
          </div>
     </div>
   
    <?php  include "chat.php" ?>
    <?php include "footer.php" ?>
</body>
</html>