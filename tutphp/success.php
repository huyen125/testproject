<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
     <!-- <meta charset="utf-8"> -->
    <meta charset="utf-8" set name utf8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Phoenix</title>
    <link rel="shortcut icon" type="image/x-icon" href="">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/style-1.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>

    <!-- Header area -->
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="user-menu">
                        <ul style="text-align: right;">
                            <?php

                            if(isset($_SESSION['username'])){
                              
                              echo '<li><a href="logout.php"><i class="fa fa-user"></i>Đăng xuất</a></li>';
                            }
                            else{
                              echo '<li><a href="login.php"><i class="fa fa-user"></i>Đăng Nhập</a></li>';
                              echo '<li><a href="dangky.php"><i class="fa fa-user"></i>Đăng ký</a></li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->

    <!-- Site branding area -->
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="logo">
                        <h1><a href="./"><img height="80px" width= "auto" src="https://s2.logaster.com/general/light/vi/logo1.png"></a></h1>
                    </div>
                </div>

                <!-- form search -->




                <div class="col-sm-8">
                  <div class="single-sidebar">
                    <center>
                      <form  action= "<?php echo $_SERVER['PHP_SELF']; ?>"method="post">
                        <input type="text" name="product_name" />
                        <input type="submit" value="Tìm kiếm" name="Tìm kiếm" />
                      </form>
                    </center>
                  </div>
                </div>


                <!-- Hết form search -->
                
            </div>
        </div>
    </div> <!-- End site branding area -->

    <!-- Mainmenu area -->


    <div id="menu">

      <ul>
        <li class="active"><a href="index.php">Trang Chủ</a></li>
          <li><a href="shop.php?id=1">Điện Thoại</a>

            <ul class="sub-menu">
              <li><a href="shop.php?id=1.1">Apple(iphone)</a></li>
              <li><a href="shop.php?id=1.2">Samsung</a></li>
              <li><a href="shop.php?id=1.3">Xiaomi</a></li>
              <li><a href="shop.php?id=1.4">Oppo</a></li>
              <li><a href="shop.php?id=1.5">LG</a></li>
            </ul>
          </li>
          <li><a href="shop.php?id=2">Phụ Kiện</a>
            <ul class="sub-menu">
              <li><a href="shop.php?id=2.1">Phụ kiện Apple(iphone)</a></li>
              <li><a href="shop.php?id=2.2">Phụ kiện Samsung</a></li>
              <li><a href="shop.php?id=2.3">Phụ kiện Xiaomi</a></li>
              <li><a href="shop.php?id=2.4">Phụ kiện Oppo</a></li>
              <li><a href="shop.php?id=2.5">Phụ kiện LG</a></li>
            </ul>
          </li>
        </ul>
    </div>

 <!-- End mainmenu area -->

 <div class="row" style="margin-top:40px;min-height:300px;">
   <div class="container">


   <div class="alert alert-success">
     <strong>Đặt hàng thành công!</strong> Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất.
   </div>
   <a href="index.php">
     <input type="submit" value="Tiếp Tục Mua Hàng" id="add-to-cart">
   </a>
 </div>
 </div>

 <div class="footer-top-area">
     <div class="container">
         <div class="row">
             <div class="col-md-3 col-sm-6">
                 <div class="footer-about-us">
                   <div class="logo">
                       <h1><a href="./"><img height="80px" width= "auto" src="https://s2.logaster.com/general/light/vi/logo1.png"></a></h1>
                   </div>
                     <p style="text-align: justify;">
                       Cùng với mục tiêu trở thành nhà bán lẻ điện thoại hàng đầu Việt Nam,
                       Phoenix đã và đang không ngừng cải tiến chất lượng, dịch vụ ngày càng tốt
                       hơn để có thể đáp ứng mọi nhu cầu của khách hàng!
                     </p>
                 </div>
             </div>

             <div class="col-md-3 col-sm-6">
                 <div class="footer-menu">
                   <h2 style="font-size:15px; color: #fff;">LIÊN HỆ</h2>
                   <ul>
                       <li><a href="#">Hotline: 0123456789</a></li>
                       <li><a href="#">Email: cskh@phoenix.com</a></li>
                       <li><a href="#">Trụ sở: Đại Học FPT - Hà Nội</a></li>
                   </ul>
                 </div>
             </div>

             <div class="col-md-3 col-sm-6">
                 <div class="footer-menu">
                     <h2 style="font-size:15px; color: #fff;">DANH MỤC</h2>
                     <ul>
                         <li><a href="shop.php?id=1">Điện Thoại</a></li>
                         <li><a href="shop.php?id=2">Phụ Kiện</a></li>
                     </ul>
                 </div>
             </div>

             <div class="col-md-3 col-sm-6">
                 <div class="footer-menu">
                   <h2 style="font-size:15px; color: #fff;">KẾT NỐI VỚI CHÚNG TÔI</h2>
                   <div class="footer-social">
                       <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                       <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                       <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                   </div>
                   <h2 style="font-size:15px; color: #fff;">PHƯƠNG THỨC THANH TOÁN</h2>
                   <div class="footer-card-icon">
                     <i class="fa fa-cc-mastercard"></i>
                     <i class="fa fa-cc-paypal"></i>
                     <i class="fa fa-cc-visa"></i>
                   </div>
                 </div>
             </div>
         </div>
     </div>
 </div> <!-- End footer top area -->

    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2018 Phoenix</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->

    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>

    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>

    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>

    <!-- Main Script -->
    <script src="js/main.js"></script>

    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
	<script type="text/javascript" src="js/script.slider.js"></script>
  </body>
</html>
