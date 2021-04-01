<?php 
session_start(); 
require "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {
	// lấy uname và pass khi nhập
	$uname = $_POST['uname'];
	$pass = $_POST['password'];
//Nếu nhập thiếu unname
	if (empty($uname)) {
		header("Location: index.php?error=Vui lòng nhập tài khoản!");
		// echo "vui long nhap lai tai khoan";
		exit();
// nếu nhập thiếu password
	}else if(empty($pass)){
		header("Location: index.php?error=Vui lòng nhập mật khẩu! ");
		// echo "Vui long nhap mat khau";
		exit();
	}else{
		$sql = "SELECT * FROM loginform WHERE user_name='$uname' AND password='$pass'";
			// chọn username và pass trong bảng loginform đã tạo trong CSDL: demo

		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);

			if ($row['user_name'] === $uname && $row['password'] === $pass) { 
            // so sánh biến nhập với cơ sở dữ liệu
				$_SESSION['user_name'] = $row['user_name'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['id'] = $row['id'];

				switch ($row['type']) {
					//admin
					case 'admin':
						header("Location: admin.php");
						exit();
						break;
					//student
					case 'user':
						header("Location: user.php");
						exit();
						break;
					//teacher
					case 'teacher':
						header("Location: teacher.php");
						exit();
						break;
					//default		
					default:
						break;
				}
				// header("Location: admin.php");
				// exit();
			// }
			// if ($row['user_name'] === $uname && $row['password'] === $pass && $row['type']=== 'user') { 
   //          // so sánh biến nhập với cơ sở dữ liệu
			// 	$_SESSION['user_name'] = $row['user_name'];
			// 	$_SESSION['name'] = $row['name'];
			// 	$_SESSION['id'] = $row['id'];
			// 	header("Location: user.php");
			// 	exit();
			// }
			// if ($row['user_name'] === $uname && $row['password'] === $pass && $row['type']=== 'teacher') { 
   //          // so sánh biến nhập với cơ sở dữ liệu
			// 	$_SESSION['user_name'] = $row['user_name'];
			// 	$_SESSION['name'] = $row['name'];
			// 	$_SESSION['id'] = $row['id'];
			// 	header("Location: teacher.php");
			// 	exit();
			}else{
            	// hiện thông báo sai tên hoặc mật khẩu
				header("Location: index.php?error=Sai tên hoặc mật khẩu"); 
				// echo "Sai ten hoạc mat khau";
				exit();
			}
		}else{
			// hiện thông báo sai tên hoặc mật khẩu
			header("Location: index.php?error=Sai tên hoặc mật khẩu");
			// echo "Sai ten hoặc mật khẩu";
			exit();
		}
	}
}else{
	header("Location: index.php");
	echo "Vui lòng nhập lại tài khoản và mật khẩu! ";
	exit();
}