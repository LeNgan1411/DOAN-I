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
    $data['id']          = isset($_POST['id']) ? $_POST['id'] : '';
    $data['name']      = isset($_POST['name']) ? $_POST['name'] : '';
    $data['adress']     = isset($_POST['adress']) ? $_POST['adress'] : '';
    $data['sdt']    = isset($_POST['sdt']) ? $_POST['sdt'] : '';
    $data['email']          = isset($_POST['email']) ? $_POST['email'] : '';
    
    // Validate thong tin
    $errors = array();
    if (empty($data['name'])){
        $errors['name'] = 'Chưa nhập tên sinh vien';
    }
    
    if (empty($data['adress'])){
        $errors['adress'] = 'Chưa nhập giới tính sinh vien';
    }
    
    // Neu ko co loi thi insert
    if (!$errors){
        edit_hd($data['id'], $data['email'], $data['name'], $data['adress'], $data['sdt']);
        // Trở về trang danh sách
        header("location: hd-list.php");
    }
}

disconnect_db();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Thêm hoạt động</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Sửa thông tin</h1>
    <a href="hd-list.php">Trở về</a> <br/> <br/>
    <form method="post" action="hd-edit.php?id=<?php echo $data['id']; ?>">
        <table width="50%" border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td>Họ tên</td>
                <td>
                    <input type="text" name="name" value="<?php echo $data['name']; ?>"/>
                    <?php if (!empty($errors['name'])) echo $errors['name']; ?>
                </td>
            </tr>
            <tr>
                <td>Văn phòng</td>
                <td>
                    <input type="text" name="adress" value="<?php echo $data['adress']; ?>"/>
                    <?php if (!empty($errors['adress'])) echo $errors['adress']; ?>
                </td>
            </tr>
            <tr>
                <td>SĐT</td>
                <td>
                    <input type="text" name="sdt" value="<?php echo $data['sdt']; ?>"/>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" name="email" value="<?php echo $data['email']; ?>"/>
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
