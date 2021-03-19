<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
 <!doctype html>
 <html lang="en">

 <head>
    <title>Hệ thống quản lý đồ án</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- HOME css -->
    <link rel=" icon" href="./public/images/set.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <h1> Hi chào <?php echo $_SESSION['name']; ?> :v</h1>
 <a href="logout.php">Thoát</a>
 <header></header>
 
</body>
</html>

<?php 
}else{
 header("Location: index.php");
 exit();
}
?>