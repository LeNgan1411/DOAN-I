<?php require "header.php";
   ?>

<link rel="stylesheet" type="text/css" href="css/style-loginform.css">
<body>
   <form action="login.php" method="post">
      <h2>ĐĂNG NHẬP</h2>
      <?php if (isset($_GET['error'])) { ?>
         <p class="error"><?php echo $_GET['error']; ?></p>
     <?php } ?>
     <input type="text" name="uname" placeholder="Tài khoản"><br>
     <input type="password" name="password" placeholder="Mật khẩu"><br>
     <button type="submit">Đăng nhập</button>
    </form>
</body>
</html>