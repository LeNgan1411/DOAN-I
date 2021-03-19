<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1> Hi chào <?php echo $_SESSION['name']; ?> :v</h1>
     <a href="logout.php">Thoát</a>
     <a href="quanlydoan.html">Trang chủ</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>