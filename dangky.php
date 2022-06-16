<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
    <link rel="stylesheet" href="tsun-base.css">
    <link rel="stylesheet" href="tsun.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
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
                <a href="login.php" class="navbar-right-items login" target="_blank">
                    <i class="fa-solid fa-right-to-bracket"></i>
                    <h4>Đăng nhập</h4></a>
                <a href="#" class="navbar-right-items">
                    <i class="fa-solid fa-cart-shopping navbar-right-items"></i>
                </a>
            </div>
        </nav>
    </div>
<h1 class="IN" style="color: red;">Đăng Ký</h1>
<form method="post" action="xuly.php">
  <div class="container">
    <b>Username</b>
    <input type="text" placeholder="Enter Username" name="txtUsername" size="50"><br>

    <b>Password</b>
    <input type="password" placeholder="Enter Password" name="txtPassword" size="50"><br>

    <b>Email</b>
    <input type="text" placeholder="Enter Password" name="txtEmail" size="50"><br>

    <b>Fullname</b>
    <input type="text" placeholder="Enter Password" name="txtFullname" size="50"><br>

    <b>Ngày sinh</b>
    <input type="text" placeholder="Enter Password" name="txtBirthday" size="50"><br>

    <b>Giới tính</b>
    <select name="txtSex">
        <option value=""></option>
        <option value="Nam">Nam</option>
        <option value="Nu">Nữ</option>
    </select>
    <br>
        
    <button type="submit">Đăng ký</button>
    <br>
    <br>
    <button type="reset" class="cancelbtn">Nhập lại</button><br>
    <div style="margin-left: 20% ; padding: 10px 10px;">
    <label><input type="checkbox" checked="checked" name="remember"> Remember me </label>||
    <span><a href="#">Forgot password?</a></span>
    </div>
  </div>
</form>

    <footer>
        <div class="grid footer-container">
            <div class="footer-info footer-item">
                <h1>Giới thiệu</h1>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum officia, dolores commodi odit id aut quasi, tenetur facere culpa ipsam nisi rerum dolorum inventore ullam, et esse dolor aspernatur excepturi!</span>
                <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/57/01_mega_logo.svg/1200px-01_mega_logo.svg.png" alt=""></a>
            </div>
            <div class="footer-contact footer-item">
                <i class="fa-solid fa-location-pin">Location</i>
                <span>266 Lý Thường Kiệt</span>
                <span>267 Lý Thường Kiệt</span>
                <span>268 Lý Thường Kiệt</span>
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