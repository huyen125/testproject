<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
?>

<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once 'config.php';

    // Prepare a select statement
    $sql = "SELECT * FROM products WHERE idp = ?";

    if($stmt = mysqli_prepare($mysqli, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);

        // Set parameters
        $param_id = trim($_GET["id"]);

        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);

            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                // Retrieve individual field value
                $idp = $row["idp"];
                $idg_1 = $row["idg_1"];
                $idg_2 = $row["idg_2"];
                $product_name = $row["product_name"];
                $newprice = $row["newprice"];
                $oldprice = $row["oldprice"];
                $product_details = $row["product_details"];
                $img = $row["img"];
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }

        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }

    // Close statement
    mysqli_stmt_close($stmt);

    // Close connection
    mysqli_close($mysqli);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
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
    <style media="screen">
    figure.zoom {
background-position: 50% 50%;
position: relative;
overflow: hidden;
cursor: zoom-in;
}

figure.zoom img:hover {
opacity: 0;
}

figure.zoom img {
transition: opacity 0.5s;
display: block;
width: 100%;
}
    </style>

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
                <div class="col-sm-8">
                  <div class="single-sidebar">
                    <center>
                      <form action="#">
                          <input type="text" placeholder="Tìm kiếm sản phẩm">
                          <input type="submit" value="Tìm kiếm">
                      </form>
                    </center>
                  </div>
                </div>
                
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

    <div class="single-product-area">
        <div class="container">
            <div class="row">
                <!-- Hiện sản phẩm -->

                <div class="col-md-12">
                    <div class="product-content-right">

                        <div class="row">
                            <div class="col-sm-5">
                              <div class="col-sm-10">
                                <div class="product-images">
                                    <div class="product-main-img">

                                      <?php
                                        echo '<figure class="zoom" style="background:url(images/products/'.$row["img"].')" onmousemove="zoom(event)" ontouchmove="zoom(event)">';
                                        echo '<img src="images/products/'.$row["img"].'" width="380px;" height="auto"/>';
                                        echo '</figure>';
                                      ?>
                                    </div>
                                </div>
                              </div>
                              <div class="col-sm-2">

                              </div>

                            </div>

                            <div class="col-sm-4">
                                <div class="product-inner">
                                    <h2 class="product-name"><?php echo $row["product_name"]; ?></h2>
                                    <p style="font-size: 95%;color: #858585;">Mã sản phẩm: <?php echo $row["idp"]; ?></p>
                                    <hr>
                                    <div class="product-inner-price">
                                        <ins style="font-size: 140%;"><?php echo number_format($row["newprice"], 0, '.', '.'); ?>đ</ins>
                                        <?php
                                        $sale = ($row["oldprice"] - $row["newprice"])*100/$row["oldprice"];
                                        $tien_giam = $row["oldprice"] - $row["newprice"];
                                        if($sale > 0){
                                          echo '<p style="font-size: 95%;color: #858585;">Tiết kiệm: <span style="color: #e56a10;">'.(int)$sale.'% </span>';
                                          echo '('.number_format($tien_giam, 0, '.', '.').'đ)';
                                          echo '</p>';
                                        }
                                        ?>
                                        <p style="font-size: 95%;color: #858585;">Giá thị trường: <?php echo number_format($row["oldprice"], 0, '.', '.'); ?>đ</p>
                                    </div>
                                    <hr>
                                    <p><pre width="100%;" style="font-family: Arial; background-color:#fff;border:none;padding-left: 0px;word-wrap: break-word;"><?php echo $row["product_details"];?> </pre></p>
                                    <hr>
                                    <p>Số lượng</p>
                                        <input type="number" size="4" class="input-text qty text" title="Số lượng" value="1" name="quantity" min="1" step="1">
                                        <?php

                                        //if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
                                        if(session_id() == '' || !isset($_SESSION)){session_start();}
                                        include 'config.php';
                                        ?>
                                        <?php
                                          $i=0;
                                          $product_id = array();
                                          $product_quantity = array();

                                          $result = $mysqli->query('SELECT * FROM products');
                                          if($result === FALSE){
                                            die(mysql_error());
                                          }
                                          if($result){
                                            while($row = $result->fetch_object()) {

                                              if($row->qty > 0 && $row->idp == $idp){
                                                echo '<p style="margin-top: 20px;"><strong>Còn lại: </strong>: '.$row->qty.' sản phẩm</p>';
                                                echo '<p><a href="update-cart.php?action=add&id='.$row->idp.'"><button class="add_to_cart_button" type="submit" id="add-to-cart">THÊM VÀO GIỎ HÀNG</button></a></p>';
                                              }
                                              else if($row->qty == 0 && $row->idp == $idp){
                                                echo '<p style="margin-top: 20px;"><strong>Còn lại: </strong>: '.$row->qty.' sản phẩm</p>';
                                                echo '<p><button class="add_to_cart_button" type="submit" style="background:#fff; border: 1px solid #e56a10; color:#e56a10;" id="add-to-cart">ĐÃ HẾT HÀNG</button></p>';
                                              }

                                              $i++;
                                            }

                                          }

                                          $_SESSION['product_id'] = $product_id;


                                          echo '</div>';
                                          echo '</div>';
                                          ?>

                                    <div class="col-sm-3">
                                      <div class="seller-block-wrap">
                                        <p style="color: #e56a10;"><strong>Phoenix</strong></p>
                                        <p><i class="fa fa-check-circle" title="Trang đã xác minh hàng chính hãng."></i> Cam kết chính hãng 100%</p>
                                        <p><i class="fa fa-truck"></i> Freeship: đơn hàng trên 180 ngàn</p>
                                        <hr style="border: 0.5px dotted #e56a10;">
                                        <p><strong>Liên hệ</strong></p>
                                        <p><i class="fa fa-phone"></i>&ensp;Hotline: 0123456789</p>
                                        <p><i class="fa fa-envelope"></i> Email: cskh@phoenix.com</p>
                                        <hr style="border: 0.5px dotted #e56a10;">
                                        <p><strong>Địa chỉ</strong></p>
                                        <p><i class="fa fa-map-marker color-x"></i> Đại học FPT - Hà Nội</p>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sản phẩm tương tự -->
                        <div class="maincontent-area" id="background-white">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="latest-product">
                                            <hr>
                                            <h4>SẢN PHẨM TƯƠNG TỰ</h4>
                                            <div class="product-carousel">
                                              <?php

                                              //if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
                                              if(session_id() == '' || !isset($_SESSION)){session_start();}
                                              include 'config.php';
                                              ?>
                                              <?php
                                                $i=0;
                                                $product_id = array();
                                                $product_quantity = array();

                                                $k = $mysqli->query('SELECT * FROM products');
                                                if($k === FALSE){
                                                  die(mysql_error());
                                                }

                                                if($k){

                                                  while($row = $k->fetch_object()) {
                                                    if($row->idg_1 == $idg_1 && $row->idg_2 == $idg_2){
                                                      $sale = ($row->oldprice - $row->newprice)*100/$row->oldprice;
                                                      echo '<div class="single-product">';
                                                      echo '<a href="single-product.php?id='.$row->idp.'">';
                                                      echo '<div class="product-f-image">';
                                                      echo '<img src="images/products/'.$row->img.'"/>';
                                                      echo '</div>';
                                                      echo '<h2><a href="single-product.php?id='.$row->idp.'">'.$row->product_name.'</a></h2>';
                                                      echo '<div class="product-carousel-price">';
                                                      echo '<ins>'.number_format($row->newprice, 0, '.', '.').'đ</ins><del>'.number_format($row->oldprice, 0, '.', '.').'đ</del>';
                                                      if($sale > 0){
                                                        echo '<p style="font-size: 110%;">&#160;&ensp;-'. (int)$sale. '%</p>';
                                                      }
                                                      echo '</div>';
                                                      echo '</a>';
                                                      echo '</div>';
                                                    }
                                                  }
                                                }

                                                $_SESSION['product_id'] = $product_id;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- Hết sản phẩm tương tự -->



                      </div>
                    </div>
                  </div>
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

                        <script>
                      function zoom(e) {
                        var zoomer = e.currentTarget;
                        e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
                        e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
                        x = (offsetX / zoomer.offsetWidth) * 100
                        y = (offsetY / zoomer.offsetHeight) * 100
                        zoomer.style.backgroundPosition = x + "% " + y + "%";
                      }
                    </script>
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
  </body>
</html>
