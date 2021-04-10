<?php
// Kết nối Database
include 'db_conn.php';
$query=mysqli_query($conn,"select * from `ke_hoach`");
$row=mysqli_fetch_assoc($query);
?>


<form method="POST" class="form">
<h2>Kế hoạch hoạt động</h2>
<label>STT hoạt động: <input type="text" value="<?php echo $row['id']; ?>" name="id"></label><br/>
<label>Tên hoạt động: <input type="text" value="<?php echo $row['ten_hd']; ?>" name="ten_hd"></label><br/>
<label>Thời gian bắt đầu: <input type="date" value="<?php echo $row['bat_dau']; ?>" name="bat_dau"></label><br/>
<label>Thời gian kết thúc: <input type="date" value="<?php echo $row['ket_thuc']; ?>" name="ket_thuc"></label><br/>
<input type="submit" value="Cập nhật" name="update_hd">
<a href="giaovu.php">Trở về</a>
<?php

if (isset($_POST['update_hd'])){
$id=$_POST['id'];
$ten_hd=$_POST['ten_hd'];
$bat_dau=$_POST['bat_dau'];
$ket_thuc=$_POST['ket_thuc'];
 
// Create connection
$conn = new mysqli("localhost", "root", "", "demo");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
 // cập nhật vào bảng ke_hoach
// $sql = "UPDATE `ke_hoach` SET id='$id', ten_hd='$ten_hd', thoi_han='$thoi_han' WHERE id='$id'";
$sql = "UPDATE `ke_hoach` SET id='$id', ten_hd='$ten_hd', bat_dau='$bat_dau' ,ket_thuc='$ket_thuc'  WHERE id='$id'";
 
if ($conn->query($sql) === TRUE) {
echo "</br> Cập nhật thành công";
header("Location: giaovu.php");
} else {
echo "</br> Cập nhật khong thành công" . $conn->error;
}
 
$conn->close();
}

?>

</form>