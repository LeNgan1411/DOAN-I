<!doctype html>
<html lang="en">

<head>
    <title>Hệ thống quản lý đồ án</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel=" icon" href="./public/images/set.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <form action="login.php" method="post">
      <h2>ĐĂNG NHẬP</h2>
      <?php if (isset($_GET['error'])) { ?>
         <p class="error"><?php echo $_GET['error']; ?></p>
     <?php } ?>
     <label>Tài khoản</label>
     <input type="text" name="uname" placeholder="Tài khoản"><br>
     <label>Mật khẩu</label>
     <input type="password" name="password" placeholder="Mật khẩu"><br>
     <button type="submit">Đăng nhập</button>
    </form>
</body>
</html>