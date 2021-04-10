<?php

require './libs/hd.php';

// Thực hiện xóa
$id = isset($_POST['id']) ? (int)$_POST['id'] : '';
if ($id){
    delete_hd($id);
}

// Trở về trang danh sách
header("location: hd-list.php");