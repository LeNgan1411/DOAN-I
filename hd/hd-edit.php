<?php

require './libs/hd.php';

// Lấy thông tin hiển thị lên để người dùng sửa
$id = isset($_GET['id']) ? (int)$_GET['id'] : '';
if ($id){
    $data = get_hd($id);
}

// Nếu không có dữ liệu tức không tìm thấy sinh viên cần sửa
if (!$data){
 header("location: hd-list.php");
}

// Nếu người dùng submit form
if (!empty($_POST['edit_hd']))
{
    // Lay data
    $data['ten_hd']      = isset($_POST['ten_hd']) ? $_POST['ten_hd'] : '';
    $data['bat_dau']     = isset($_POST['bat_dau']) ? $_POST['bat_dau'] : '';
    $data['ket_thuc']    = isset($_POST['ket_thuc']) ? $_POST['ket_thuc'] : '';
    $data['id']          = isset($_POST['id']) ? $_POST['id'] : '';
    
    // Validate thong tin
    $errors = array();
    if (empty($data['ten_hd'])){
        $errors['ten_hd'] = 'Chưa nhập tên sinh vien';
    }
    
    if (empty($data['bat_dau'])){
        $errors['bat_dau'] = 'Chưa nhập giới tính sinh vien';
    }
    
    // Neu ko co loi thi insert
    if (!$errors){
        edit_hd($data['id'], $data['ten_hd'], $data['bat_dau'], $data['ket_thuc']);
        // Trở về trang danh sách
        header("location: hd-list.php");
    }
}

disconnect_db();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sửa hoạt động</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Sửa hoạt động </h1>
    <a href="hd-list.php">Trở về</a> <br/> <br/>
    <form method="post" action="hd-edit.php?id=<?php echo $data['id']; ?>">
        <table width="50%" border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="ten_hd" value="<?php echo $data['ten_hd']; ?>"/>
                    <?php if (!empty($errors['ten_hd'])) echo $errors['ten_hd']; ?>
                </td>
            </tr>
            <tr>
                <td>bat dau</td>
                <td>
                    <input type="date" name="bat_dau" value="<?php echo $data['bat_dau']; ?>"/>
                    <?php if (!empty($errors['bat_dau'])) echo $errors['bat_dau']; ?>
                </td>
            </tr>
            <tr>
                <td>ket thuc</td>
                <td>
                    <input type="date" name="ket_thuc" value="<?php echo $data['ket_thuc']; ?>"/>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>"/>
                    <input type="submit" name="edit_hd" value="Lưu"/>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
