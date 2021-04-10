<?php
require './libs/hd.php';
$hd = get_all_hd();
disconnect_db();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Danh sách hoạt động</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body >
        <h1>Danh sách hoạt động</h1>
        <a href="hd-add.php">Thêm hoạt động</a> <br/> <br/>
        <table width="100%"  border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td>STT</td>
                <td>Tên hoạt động</td>
                <td>Thời gian bắt đầu</td>
                <td>Thời gian kết thúc</td>
                <td>Chức năng</td>
            </tr>
            <?php foreach ($hd as $item){ ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['ten_hd']; ?></td>
                <!-- <td><?php echo $item['bat_dau']; ?></td>
                <td><?php echo $item['ket_thuc']; ?></td> -->
                
                <!-- Đổi định dạng ngày d-m-Y -->
                <?php 
                 $newDateStart = date("d-m-Y", strtotime($item['bat_dau']));
                 $newDateEnd = date("d-m-Y", strtotime($item['ket_thuc']));
                 echo "<td>" . $newDateStart . "</td>";
                 echo "<td>" . $newDateEnd . "</td>";
                ?>
                
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
