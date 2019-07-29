<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once '../config.php';

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
                $product_details = $row["product_details"];
                $newprice = $row["newprice"];
                $oldprice = $row["oldprice"];
                $qty = $row["qty"];
                if($idg_1 == 1){
                  $idg_1 = "Điện Thoại";
                  if($idg_2 == 1){
                    $idg_2 ="Apple(iphone)";
                  }
                  else if($idg_2 == 2){
                    $idg_2 ="Samsung";
                  }
                  else if($idg_2 == 3){
                    $idg_2 ="Xiaomi";
                  }
                  else if($idg_2 == 4){
                    $idg_2 ="Oppo";
                  }
                  else if($idg_2 == 5){
                    $idg_2 ="LG";
                  }
                }
                else if($idg_1 == 2){
                  $idg_1 = "Phụ Kiện";
                  if($idg_2 == 1){
                    $idg_2 ="Phụ kiện Apple(iphone)";
                  }
                  else if($idg_2 == 2){
                    $idg_2 ="Phụ kiện Samsung";
                  }
                  else if($idg_2 == 3){
                    $idg_2 ="Phụ kiện Xiaomi";
                  }
                  else if($idg_2 == 4){
                    $idg_2 ="Phụ kiện Oppo";
                  }
                  else if($idg_2 == 5){
                    $idg_2 ="Phụ kiện LG";
                  }
                }

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
    <!-- Title Page-->
    <title>Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <!-- Fontfaces CSS-->
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    
    <style media="screen">
    /* My CSS */

    /*glyphicon*/
    #icon {
      color: #333333;
      font-size: 1em;
    }

    #icon.glyphicon-eye-open:hover {
      color: #0094D2;
    }

    #icon.glyphicon-pencil:hover {
      color: #008000;
    }

    #icon.glyphicon-trash:hover {
      color: #e56a10;
    }

    /*end glyphicon*/

    /*Thêm sản phẩm mới*/

    a.add-product-new {
      background: #e56a10;
      color: #fff;
      border: 1px solid #e56a10;
      padding: 7px;
      border-radius: 5px;
    }
    </style>

</head>

<body>
    <div class="page-wrapper">

      <!-- MENU SIDEBAR-->
      <aside class="menu-sidebar d-none d-lg-block">
       
          <div class="menu-sidebar__content js-scrollbar1">
              <nav class="navbar-sidebar">
                  <ul class="list-unstyled navbar__list">
                    <li>
                        <a href="index.php" style="color: #e56a10;">
                            <i class="fas fa-book"></i>Sản Phẩm</a>
                    </li>
                    <li>
                        <a href="users.php">
                            <i class="fas fa-user"></i>Người Dùng</a>
                    </li>
                  </ul>
              </nav>
          </div>
      </aside>
      <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Tìm kiếm" />
                                <button class="au-btn--submit" type="submit" style="background-color:#e56a10;">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>

                            <div class="">
                              <a href="logout.php" style="color: #e56a10;">
                                <i class="zmdi zmdi-power"></i>
                                Đăng xuất
                              </a>
                            </div>

                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="page-header">
                            <h3>Xem chi tiết</h3>
                            <p><a href="index.php" class="btn btn-primary">Back</a></p>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label>Tên sản phẩm: </label> <?php echo $row["product_name"]; ?>
                              </div>
                              <div class="form-group">
                                  <label>Mã ID: </label> <?php echo $row["idp"]; ?>
                              </div>
                              <div class="form-group">
                                  <label>Danh mục: </label> <?php echo $idg_1 ?>, <?php echo $idg_2 ?>
                              </div>
                              <div class="form-group">
                                  <label>Giá mới:</label> <?php echo $row["newprice"].'đ'; ?>
                              </div>
                              <div class="form-group">
                                  <label>Giá cũ:</label> <?php echo $row["oldprice"].'đ'; ?>
                              </div>
                              <div class="form-group">
                                  <label>Còn lại:</label> <?php echo $row["qty"].' sản phẩm'; ?>
                              </div>
                              <div class="form-group">
                                  <label>Chi tiết sản phẩm:</label>
                                  <p><?php echo $row["product_details"]; ?></p>
                              </div>
                          </div>
                          <div class="col-md-6" style="text-align:center;">
                            <label>Hình ảnh</label>
                            <div class="product-images">
                                <div class="product-main-img">
                                  <?php
                                    echo '<img src="../images/products/'.$row["img"].'" width="300px;" height="auto"/>';
                                  ?>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 phoenix.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
