<?php

require './libs/hd.php';

// Nếu người dùng submit form
if (!empty($_POST['add_hd'])) {
    // Lay data
    $data['id'] = isset($_POST['id']) ? $_POST['id'] : '';
    $data['name'] = isset($_POST['name']) ? $_POST['name'] : '';
    $data['adress'] = isset($_POST['adress']) ? $_POST['adress'] : '';
    $data['sdt'] = isset($_POST['sdt']) ? $_POST['sdt'] : '';
    $data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
    // Validate thong tin
    $errors = array();
    if (empty($data['name'])) {
        $errors['name'] = 'Chưa nhập tên giao vien';
    }

    if (empty($data['adress'])) {
        $errors['adress'] = 'Chưa nhập van phong';
    }

    // Neu ko co loi thi insert
    if (!$errors) {
        add_hd($data['id'],$data['name'], $data['sdt'], $data['adress'] ,$data['email']);
        // Trở về trang danh sách
        header("location: hd-list.php");
    }
}

disconnect_db();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Thêm giáo viên</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Thêm giáo viên</h1>
        <a href="hd-list.php">Trở về</a> <br/> <br/>
        <form method="post" action="hd-add.php">
            <table width="50%" border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <td>MSGV</td>
                    <td>
                        <input type="text" name="id" value="<?php echo !empty($data['id']) ? $data['id'] : ''; ?>"/>
                        <?php if (!empty($errors['ten_hd'])) { echo $errors['id'];
}
?>
                    </td>
                </tr>
                <tr>
                    <td>Họ và tên</td>
                    <td>
                        <input type="text" name="name" value="<?php echo !empty($data['name']) ? $data['name'] : ''; ?>"/>
                        <?php if (!empty($errors['name'])) { echo $errors['name'];
}
?>
                    </td>
                </tr>
                <tr>
                    <td>Văn phòng</td>
                    <td>
                        <input type="text" name="adress" value="<?php echo !empty($data['adress']) ? $data['adress'] : ''; ?>"/>
                        <?php if (!empty($errors['adress'])) {echo $errors['adress'];
}
?>
                    </td>
                </tr>
                <tr>
                    <td>SĐT</td>
                    <td>
                        <input type="text" name="sdt" value="<?php echo !empty($data['sdt']) ? $data['sdt'] : ''; ?>"/>
                        <?php if (!empty($errors['sdt'])) {  echo $errors['sdt'];
}
?>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="text" name="email" value="<?php echo !empty($data['email']) ? $data['email'] : ''; ?>"/>
                        <?php if (!empty($errors['email'])) { echo $errors['email'];
}
?>
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
