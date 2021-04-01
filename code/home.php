<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>

<body>
	<h1> Hi chào <?php echo $_SESSION['name']; ?> :v</h1>
	<a href="logout.php" class="btn btn-outline-success">Thoát</a>
</body>
</html>

<?php 
}else{
	header("Location: index.php");
	exit();
}
?>