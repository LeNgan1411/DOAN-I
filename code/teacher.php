<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>

<body>
	<h1> Hi chào teacher <?php echo $_SESSION['name']; ?> :v</h1>
			<?php
			require "db_conn.php";
			$sql = "SELECT id,name, class FROM loginform where type='user'";
			$result = $conn->query($sql);

			// if ($result->num_rows > 0) {
		 //    // output dữ liệu trên trang
			// 	while($row = $result->fetch_assoc()) {
			// 		echo "id: " . $row["id"]. " - Name: " . $row["name"]. " "
			// 		. $row["class"]. "<br>";
			// 	}
			// } else {
			// 	echo "0 results";
			// }
			// $conn->close();
			if($result->num_rows > 0){
				echo "<table>";
					echo "<tr>";
					echo "<th>id</th>";
					echo "<th>Name</th>";
					echo "<th>Class</th>";
				echo "</tr>";
				while($row = $result->fetch_array()){
					echo "<tr>";
						echo "<td>" . $row['id'] . "</td>";
						echo "<td>" . $row['name'] . "</td>";
						echo "<td>" . $row['class'] . "</td>";
					echo "</tr>";
				}
				echo "</table>";
			}else {
				echo "0 results";
			}
			$conn->close();
			?>
	<a href="logout.php" class="btn btn-outline-success">Thoát</a>
</body>
</html>

<?php 
}else{
	header("Location: index.php");
	exit();
}
?>