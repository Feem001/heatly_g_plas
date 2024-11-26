<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="up.css">
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
     <script type="text/javascript" src="jquery-3.7.1.min.js"></script>
     <script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
     <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
     

<div class="up text-center mt-4" id="up ">
<div class="text-end  me-5">
<a href="user.php" type="button" class="btn-close  me-5" id="close" title="ปิด"></a>
</div>
<a href="user.php" id="close " title="close" ><img src="โปรโมชัน.png"  class="w-50  shadow-lg"  height="100%"  alt=""></a>
     </div>
     
     <script>
          $(document).ready(()=>{
               $("#close").on('click',()=>{
                    $('#up').hide();
                    $('#close').hide();

               });
               
          })
     </script>

</body>
</html>