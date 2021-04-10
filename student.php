<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    ?>
    <!doctype html>
    <html lang="en">

    <head>
        <title>Hệ thống quản lý đồ án</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="./public/fontawesome-free-5.15.2-web/css/all.min.css" />
        <link rel=" icon" href="./public/images/set.png" type="image/x-icon">
        <link rel="stylesheet" href="./css/giaovu.css">
    </head>

    <body>
        <header id="head">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-8 header-info">
                        <a href="" class="logo-set">

                            <div class="logo-img"><img src="./public/images/set.png" alt=""></div>
                            <div class="logo-text">
                                <span class="text-name-set">hệ thống quản lý đồ án</span>
                                <p><i class="text-name-hust"> viện điện tử - viễn thông </i>

                                </p>
                                <div class="line"></div>
                            </div>
                        </a>

                    </div>
                    <div class="col-md-4 d-none d-md-block header-social">
                        <ul>
                            <li>
                                <a href="mailto:set-office@hust.edu.vn"><img src="./public/images/mail.png" alt=""></a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/set2010"><img src="./public/images/facebook.png"
                                    alt=""></a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/channel/UCArkyL4-YzKsLWGGKk3uuEA"><img
                                        src="./public/images/youtube.png" alt=""></a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </header>
                <nav id="na">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="link-nav-main">
                                    <ul>
                                        <li><a href="">Trang chủ</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 user">
                                <i class="fas fa-user-circle"></i>
                                <div class="user-info  ">
                                    <div class="name-user">
                                     <div class="left"><i class="fas fa-user-circle"></i></div>
                                     <div class="right">

                                        <!-- php -->
                                        <?php require "db_conn.php";
                                        $value = $_SESSION['id'];
                                        $sql = "SELECT name, email FROM student where  id = $value";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_array()) {
                                                echo "<span>";
                                                echo $row['name'];
                                                echo "</span>";

                                                echo "<br>";
                                                echo $row['email'];
                                                echo "</br>";
                                            }
                                        } else {
                                            echo "0 results";
                                        }

                                        $conn->close();
                                        ?>

                                        <!-- <span>Lê Thị Ngân</span> -->
                                        <!-- <br>ngan.lt182704@sis.hust.edu.vn</br> -->
                                    </div>
                                </div>
                                <ul>
                                    <li><a href="">Thông tin cá nhân</a></li>
                                    <li><a href="">Đổi mật khẩu </a></li>
                                    <li><a href="logout.php">Đăng xuất</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <main>
                <section class="banner-page">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 left">
                                <ul class="list-manager">
                                    <li class="manager-item time-table">
                                        <a href="">Thông báo</a>  
                                        <div class="list-active">
                                        <?php
                                        $conn = mysqli_connect("localhost", "root", "", "demo");
                                            $sql = "SELECT *  FROM ke_hoach where 1 ";
                                            $result = $conn->query($sql);
                                            // if($result !== false && $result->num_rows > 0){
                                            if (($result = $conn->query($sql)) !== false) {
                                                echo "<table>";
                                                echo "<tr>";
                                                echo "<th>STT</th>";
                                                echo "<th>Tên hoạt động</th>";
                                                echo "<th>Thời gian bắt đầu</th>";
                                                echo "<th>Thời gian kết thúc</th>";
                                                echo "</tr>";
                                                //  while($row = $result->fetch_array()){
                                                while ($row = $result->fetch_assoc()) {
                                                    // đổi định dạng ngày tháng
                                                    $newDateStart = date("d-m-Y", strtotime($row['bat_dau']));
                                                    $newDateEnd = date("d-m-Y", strtotime($row['ket_thuc']));
                                                    echo "<tr>";
                                                    echo "<td>" . $row['id'] . "</td>";
                                                    echo "<td>" . $row['ten_hd'] . "</td>";
                                                    echo "<td>" . $newDateStart . "</td>";
                                                    echo "<td>" . $newDateEnd . "</td>";
                                                    echo "</tr>";
                                                }
                                                echo "</table>";
                                            } else {
                                                echo "0 results";
                                            }
                                            $conn->close();
                                    ?>
                           </div>                                                   
                       </li>
                       <li class="manager-item">
                        <a href="">Đăng ký đồ án</a>                             
                    </li>
                    
                    <li class="manager-item">
                        <a href="">Quản lý đồ án</a>                               
                    </li>

                </ul>
            </div>
            <div class="col-lg-9 right">
                <img src="./public/images/gv.jpg" alt="">
            </div>
        </div>
    </div>
</section>
</main>
<footer id="fo">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 text-address">
                <div class="name"><img src="./public/images/logo-bottom.jpg" alt=""></div>
                <div class="address">Phòng 405 - C9, Đại học Bách Khoa Hà Nội, số 1 Đại Cồ Việt, Hai Bà Trưng, Hà
                Nội</div>
            </div>
            <div class="col-lg-4 copy-right">Copyright © 2021 Viện Điện tử - Viễn thông.</div>
        </div>
    </div>
</footer>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script >
    $(document).ready(function () {
        $(".user i").click(function () {
            // console.log("đã click")
            $(".user-info").toggleClass("nn");
        });
    });
</script>


<!-- <?php
require "footer.php";
?> -->

<?php
} else {
    header("Location: index.php");
    exit();
}
?>