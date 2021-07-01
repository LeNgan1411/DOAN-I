<?php 
session_start();
// xóa các biến đã đăng nhập
session_unset();
session_destroy();
header("Location: index.php");
