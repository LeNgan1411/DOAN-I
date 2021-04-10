<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<body>
	<h1> Hi chào admin <?php echo $_SESSION['name']; ?> :v</h1>
	<p>Kee hoach</p>
		<?php
				$conn = new mysqli("localhost", "root", "", "demo");
                            // $sql = "SELECT * FROM kehoach ";
                            // $result = $conn->query($sql);
				$sql = "SELECT * FROM ke_hoach ";
				$result = $conn->query($sql);
				
				if($result->num_rows > 0){
					echo "<table>";
						echo "<tr>";
						echo "<th>STT</th>";
						echo "<th>Tên hoạt động</th>";
						echo "<th>Thời gian</th>";
					echo "</tr>";
					while($row = $result->fetch_array()){
						echo "<tr>";
							echo "<td>" . $row['id'] . "</td>";
							echo "<td>" . $row['ten_hd'] . "</td>";
							echo "<td>" . $row['bat_dau'] . "</td>";
							echo "<td>" . $row['ket_thuc'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				}else {
					echo "0 results";
				}
				$conn->close();
	?>
	<button>
	<a href="logout.php" class="btn btn-outline-success">Đăng xuất</a>
	</button>
</body>

</html>

<?php 
}else{
	header("Location: index.php");
	exit();
}
?>