<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="">
     <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css">
     <script type="text/javascript" src="../jquery-3.7.1.min.js"></script>
     <script src="../bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
     <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php include "tmp_nav.php"  ?>
    <div class="container col-6 mt-3">
     <div class="card p-3">
     <h2 class="text-center">ประชาสัมพันธ์บทความ</h2>
          <form action="" method="post" enctype="miltipart/form-data">
               <div class="">
               <label for="">ชื่อ</label>
               <input type="text" name=""  class="form-control">
               </div>
               <div class="col-8">
                    <label for="">รูปภาพ</label>
                    <input type="file" name="file"  class="form-control">
               </div>
               <div class="">
                    <label for="">บทความ</label>
                    <textarea name="blog" id="" rows="10"   class="form-control"></textarea>
               </div>
               <button type="submit" class="btn btn-info w-100 mt-2" >เพิ่มบทความ</button>

          </form>
     </div>
    </div>

</body>
</html>