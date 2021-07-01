<?php
require './libs/hd.php';
$hd = get_all_hd();
disconnect_db();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Danh sách giáo viên</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body >
        <h1>Danh sách giáo viên</h1>
        <a href="hd-add.php">Thêm giáo viên</a> <br/> <br/>
        <table width="100%"  border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td>MSGV</td>
                <td>Họ và tên</td>
                <td>Văn phòng</td>
                <td>SĐT</td>
                <td>Email</td>
                <td>Chức năng</td>
            </tr>
            <?php foreach ($hd as $item){ ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['name']; ?></td>
                <td><?php echo $item['adress']; ?></td>
                <td><?php echo $item['sdt']; ?></td>
                <td><?php echo $item['email']; ?></td>
                <td>
                    <form method="post" action="hd-delete.php">
                        <input onclick="window.location = 'hd-edit.php?id=<?php echo $item['id']; ?>'" type="button" value="Sửa"/>
                        <input type="hidden" name="id" value="<?php echo $item['id']; ?>"/>
                        <input onclick="return confirm('Bạn có chắc muốn xóa không?');" type="submit" name="delete" value="Xóa"/>
                    </form>
                </td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>
