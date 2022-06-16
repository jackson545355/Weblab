<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
    <link rel="stylesheet" href="tsun-base.css">
    <link rel="stylesheet" href="tsun.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
<?php 
       if (isset($_SESSION['username']) && $_SESSION['username']){
           echo 'Bạn đã đăng nhập với tên là '.$_SESSION['username']."<br/>";
           echo 'Click vào đây để <a href="logout.php">Logout</a>';
       }
       else{
           echo 'Bạn chưa đăng nhập';
       }
       ?>
    <div class="header">
        <div class="contact">
            <h3>Gmail@gmail.com | Hotline: 0123456789</h3>
            <h4>Tặng cái đầu buoi`</h4>
            <form action="" class="search">
                <input type="text" placeholder="Nhập cái gì đi" class="contact-input">
            </form>
        </div>
        <nav class="navbar">
            <a href="tsun.php" class="navbar-logo navbar-items"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/57/01_mega_logo.svg/1200px-01_mega_logo.svg.png" alt="logo"></a>
            <ul class="navbar-items navbar-list">
                <li class="list-items"><a href="tsun.php">Trang chủ</a></li>
                <li class="list-items"><a href="Introduce.html">Giới thiệu</a></li>
                <li class="list-items">
                    <a href="#" class="product">
                        <span>Sản phẩm</span>
                        <i class="fa-solid fa-caret-down"></i>
                        <div class="product-menu">
                            <span>Shop all</span>
                            <span>Áo</span>
                            <span>Quần</span>
                            <span>Phụ kiện</span>
                        </div>
                    </a>
                </li>
                <li class="list-items"><a href="#">Bảng giá</a></li>
                <li class="list-items"><a href="#">Tin tức</a></li>
               
                
            </ul>
            <div class="navbar-right navbar-items">
                <a href="login.php" class="navbar-right-items login">
                    <i class="fa-solid fa-right-to-bracket"></i>
                    <h4>Đăng nhập</h4></a>
                <a href="#" class="navbar-right-items">
                    <i class="fa-solid fa-cart-shopping navbar-right-items"></i>
                </a>
            </div>
        </nav>
    </div>

    <div class="main grid-container">
        <div class="item">
            <a href="Ao_1.html"><img src="https://product.hstatic.net/1000321269/product/ban_sao_cua_r1qimlhb-1-ooig-hinh_mat_truoc-0_30a9b2a89faf48a0ba622547ace08d22_master.jpg" alt="shirt"></a>
            <a href="#"><h4>TSUN Typo Chrome Modern Tee - Black</h4></a>
        </div>
        <div class="item">
            <a href="Ao_2.html"><img src="https://product.hstatic.net/1000321269/product/ban_sao_cua_r1qimlhb-1-jt97-hinh_mat_truoc-0_67f29c54eab64b36ba040cc393765708_master.jpg" alt="shirt"></a>
            <a href="#"><h4>TSUN Lighthouse Tee - Black</h4></a>
        </div>
        <div class="item">
            <a href="Ao_3.html"><img src="https://product.hstatic.net/1000321269/product/tee_ca_sau_mt_0160a5048be348b88eddc4f76ef226f6_master.jpg" alt="shirt"></a>
            <a href="#"><h4>TSUN Alligator Mascot Tee</h4></a>
        </div>
        <div class="item">
            <a href="Ao_4.html"><img src="https://product.hstatic.net/1000321269/product/ao_xanh_duong_-_mat_sau_771c6c029c104430b1c837a8d92a35e7_master.jpg" alt="shirt"></a>
            <a href="#"><h4>TSUN Logo Tee - Metal Blue</h4></a>
        </div>
        <div class="item">
            <a href="Ao_5.html"><img src="https://product.hstatic.net/1000321269/product/ban_sao_cua_r1qimlhb-1-7731-hinh_mat_truoc-0_3dacd84f623742d9979089632fe48d9f_master.jpg" alt="shirt"></a>
            <a href="#"><h4>TSUN Balloon Tee - Tan</h4></a>
        </div>
        <div class="item">
            <a href="Ao_6.html"><img src="https://product.hstatic.net/1000321269/product/ban_sao_cua_ban_sao_cua_ban_sao_cua_gxcj3m5h-1-6we8-hinh_mat_truoc-0_964f8c577e54467a9785d2216679c0ee_master.jpg" alt="shirt"></a>
            <a href="#"><h4>TSUN Spray Paint Tee - Red</h4></a>
        </div>
        <div class="item">
            <a href="Ao_7.html"><img src="https://product.hstatic.net/1000321269/product/ban_sao_cua_0fkfxbqr-1-rju7-hinh_mat_truoc-0_b2596d095cdb4a61a9bb333aedb8b52c_master.jpg" alt="shirt"></a>
            <a href="#"><h4>TSUN B/W Panel Tee</h4></a>
        </div>
        <div class="item">
            <a href="Ao_8.html"><img src="https://product.hstatic.net/1000321269/product/yxp9w17d-1-nm3h-hinh_mat_truoc-0_d235393f48b34bfebd5206eb924c31b9_master.jpg" alt="shirt"></a>
            <a href="#"><h4>TSUN Monogram Jacket</h4></a>
        </div>
    </div>

    <footer>
        <div class="grid footer-container">
            <div class="footer-info footer-item">
                <h1>Giới thiệu</h1>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum officia, dolores commodi odit id aut quasi, tenetur facere culpa ipsam nisi rerum dolorum inventore ullam, et esse dolor aspernatur excepturi!</span>
                <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/57/01_mega_logo.svg/1200px-01_mega_logo.svg.png" alt=""></a>
            </div>
            <div class="footer-contact footer-item">
                <i class="fa-solid fa-location-pin">Location</i>
                <span>266-268 Lý Thường Kiệt</span>
            </div>
            <div class="footer-link footer-item">
                <h1>Liên kết</h1>
                    <a href="#">Shop all</a>
                    <a href="#">Áo </a>
                    <a href="#">Quần</a>
                    <a href="#">Phụ kiện</a>
            </div>
            <div class="footer-fanpage">
                <h1>Fanpage</h1>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/57/01_mega_logo.svg/1200px-01_mega_logo.svg.png" alt="">
            </div>
        </div>       
    </footer>
</body>
    </html>