<?php require "header.php";
   ?>
<link rel="stylesheet" href="css/style-main.css">

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
                <div class="col-lg-6">
                    <div class="link-nav-main">
                        <ul>
                            <li><a href="http://127.0.0.1:5500/code/quanlydoan.html">Trang chủ</a></li>
                            <li><a href="">Giảng viên</a></li>
                            <li><a href="">Sinh viên</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <main id="m">
        <div class="slider ">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img id="car" class="d-block w-100" src="./public/images/dttt.jpg" alt="First slide">
                    </div>
                    <div id="car1" class="carousel-item">
                        <img class="d-block w-100" src="./public/images/chip.jfif" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img id="car2" class="d-block w-100" src="./public/images/licensed-image.jfif" alt="Third slide">
                    </div>
                </div>
            </div>
        </div>

        <div class="login">
         <a href="loginform.php"> <button class="bt_login">Đăng nhập</button></a>
        </div>
    </main>

   <?php require "footer.php";
   ?>
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