<?php

require './libs/hd.php';

// Nếu người dùng submit form
if (!empty($_POST['add_hd'])) {
    // Lay data
    $data['ten_hd'] = isset($_POST['ten_hd']) ? $_POST['ten_hd'] : '';
    $data['bat_dau'] = isset($_POST['bat_dau']) ? $_POST['bat_dau'] : '';
    $data['ket_thuc'] = isset($_POST['ket_thuc']) ? $_POST['ket_thuc'] : '';

    // Validate thong tin
    $errors = array();
    if (empty($data['ten_hd'])) {
        $errors['ten_hd'] = 'Chưa nhập tên hd';
    }

    if (empty($data['bat_dau'])) {
        $errors['bat_dau'] = 'Chưa nhập thoi gian';
    }

    // Neu ko co loi thi insert
    if (!$errors) {
        add_hd($data['ten_hd'], $data['bat_dau'], $data['ket_thuc']);
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
        <h1>Thêm hoạt động </h1>
        <a href="hd-list.php">Trở về</a> <br/> <br/>
        <form method="post" action="hd-add.php">
            <table width="50%" border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <td>Tên hoạt động</td>
                    <td>
                        <input type="text" name="ten_hd" value="<?php echo !empty($data['ten_hd']) ? $data['ten_hd'] : ''; ?>"/>
                        <?php if (!empty($errors['ten_hd'])) {
    echo $errors['ten_hd'];
}
?>
                    </td>
                </tr>
                <tr>
                    <td>Thời gian bắt đầu</td>
                    <td>
                        <input type="date" name="bat_dau" value="<?php echo !empty($data['bat_dau']) ? $data['bat_dau'] : ''; ?>"/>
                        <?php if (!empty($errors['bat_dau'])) {
    echo $errors['bat_dau'];
}
?>
                    </td>
                </tr>
                <tr>
                    <td>Thời gian kết thúc</td>
                    <td>
                        <input type="date" name="ket_thuc" value="<?php echo !empty($data['ket_thuc']) ? $data['ket_thuc'] : ''; ?>"/>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="add_hd" value="Lưu"/>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
