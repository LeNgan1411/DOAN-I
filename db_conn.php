<?php
$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "demo";// tên CSDL là demo

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection Faile! "; // Kết nối database thất bại :((
}
