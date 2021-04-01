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
    <link rel="stylesheet" href="./style-main.css">
</head>

<body>
    <div class="label d-none">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-8"></div>
                <div class="col-md-4 ">
                    <div class="username"><div class="text">Lê Thị Ngân</div>
                    <i class="fas fa-user-circle"></i></div>
                </div>
            </div>
        </div>
    </div>
    <header>
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
    <nav>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="link-nav-main">
                        <ul>
                            <li><a href="/trangchu">Trang chủ</a></li>
                            <li><a href="">Giảng viên</a></li>
                            <li><a href="">Sinh viên</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <div class="slider ">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="./public/images/dttt.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./public/images/chip.jfif" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./public/images/licensed-image.jfif" alt="Third slide">
                    </div>
                </div>

            </div>
        </div>
        <div class="login d-block">
            <button class="bt_login">Đăng nhập </button>
        </div>
        <div class="login-menu d-none">
            <div class="text">Quản lý Đồ Án</div>
            <!-- <input type="text" id="user" placeholder="username">
            <input type="password" id="pass" placeholder="password">
            <div class="confirm">
               <button href="">đăng nhập</button> 
            </div> -->
            
            <form action="login.php" method="post"> 
              <h2>ĐĂNG NHẬP</h2>
              <?php if (isset($_GET['error'])) { ?>
                 <p class="error"><?php echo $_GET['error']; ?></p>
             <?php } ?>
             <input type="text" name="uname" placeholder="Tài khoản"><br>
             <input type="password" name="password" placeholder="Mật khẩu"><br>
             <button type="submit">Đăng nhập</button>
            
        </div>
            

        <div class="login-fail d-none ">
            <div class="text">Quản lý Đồ Án</div>
            <div class="warning">
                <div class="triangle"><i class="fas fa-exclamation-triangle"></i></div>
                <span>Tài khoản hoặc mật khẩu bị sai </span> 
                   <p>Vui lòng đăng nhập lại !</p>  
        </div>
        </form>
    </main>
    <footer>
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
    <script src="./main.js">
    </script>
</body>

</html>