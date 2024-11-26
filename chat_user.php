
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
     <?php include "nav.php"  ?>
     <div class="container col-5">
          <h2 class="text-center">แชทสนทนา</h2>
          <div class="card p-3 shadow">
               <div class="alert alert-info">
                    hello
               </div>
          </div>
          <div class="card p-3 mt-2  shadow-lg">
               <input type="text" class="form-control border-dark   shadow" name="chat">
               <button type="submit" class="btn btn-primary mt-2">ส่งข้อความ</button>
          </div>
     </div>
     <?php include "chat.php" ?>

</body>
</html>