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
          <h2 class="text-center">เพิ่มสินค้า</h2>
          <form action="" method="post" enctype="miltipart/form-data">
               <div class="">
               <label for="">ราคา</label>
               <input type="text" name=""  class="form-control">
               </div>
               <div class="col-8">
                    <label for="">รูปสินค้า</label>
                    <input type="file" name="file"  class="form-control">
               </div>
               <div class="">
                    <label for="">อธิบาย</label>
                    <textarea name="blog" id="" rows="3"   class="form-control"></textarea>
               </div>
               <button type="submit" class="btn btn-warning w-100 mt-2" >เพิ่มสินค้า</button>

          </form>
     </div>
    </div>

</body>
</html>