<?php
// Include config file
require_once '../config.php';

// Define variables and initialize with empty values
$idg_1 = $idg_2 = $product_name = $product_details = $newprice = $oldprice = $qty = $img = "";
$idg_1_err = $idg_2_err = $product_name_err = $product_details_err = $newprice_err = $oldprice_err = $qty_err = $img_err = "";

// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];

    // nhập tên sản phẩm
    $input_product_name = trim($_POST["product_name"]);
    if(empty($input_product_name)){
        $product_name_err = 'Vui lòng nhập tên sản phẩm.';
    } else{
        $product_name = $input_product_name;
    }

    // idg_1
    $input_idg_1 = trim($_POST["idg_1"]);
    if(empty($input_idg_1)){
        $idg_1_err = "Vui lòng nhập idg_1.";
    } elseif(!ctype_digit($input_idg_1)){
        $idg_1_err = 'Vui lòng nhập idg_1.';
    } else{
        $idg_1 = $input_idg_1;
    }

    // idg_2
    $input_idg_2 = trim($_POST["idg_2"]);
    if(empty($input_idg_2)){
        $idg_2_err = "Vui lòng nhập idg_2.";
    } elseif(!ctype_digit($input_idg_2)){
        $idg_2_err = 'Vui lòng nhập idg_2.';
    } else{
        $idg_2 = $input_idg_2;
    }

    // chi tiết sản phẩm
    $input_product_details = trim($_POST["product_details"]);
    if(empty($input_product_details)){
        $product_details_err = 'Vui lòng nhập chi tiết sản phẩm.';
    } else{
        $product_details = $input_product_details;
    }

    // giá mới sản phẩm.
    $input_newprice = trim($_POST["newprice"]);
    if(empty($input_newprice)){
        $newprice_err = "Vui lòng nhập giá mới sản phẩm.";
    } elseif(!ctype_digit($input_newprice)){
        $newprice_err = 'Vui lòng nhập giá mới sản phẩm.';
    } else{
        $newprice = $input_newprice;
    }

    // giá cũ sản phẩm.
    $input_oldprice = trim($_POST["oldprice"]);
    if(empty($input_oldprice)){
        $oldprice_err = "Vui lòng nhập giá cũ sản phẩm.";
    } elseif(!ctype_digit($input_oldprice)){
        $oldprice_err = 'Vui lòng nhập giá cũ sản phẩm.';
    } else{
        $oldprice = $input_oldprice;
    }

    // số lượng sản phẩm.
    $input_qty = trim($_POST["qty"]);
    if(empty($input_qty)){
        $qty_err = "Vui lòng nhập số lượng sản phẩm.";
    } elseif(!ctype_digit($input_qty)){
        $qty_err = 'Vui lòng nhập số lượng sản phẩm.';
    } else{
        $qty = $input_qty;
    }

    // nhập tên hình ảnh
    $input_img = trim($_POST["img"]);
    if(empty($input_img)){
        $img_err = 'Vui lòng nhập tên hình ảnh.';
    } else{
        $img = $input_img;
    }

    // Check input errors before inserting in database
    if(empty($idg_1_err) && empty($idg_2_err) && empty($product_name_err) && empty($product_details_err) && empty($newprice_err) && empty($oldprice_err) && empty($qty_err) && empty($img_err)){
        // Prepare an insert statement
        $sql = "UPDATE products SET idg_1=?, idg_2=?, product_name=?, product_details=?, newprice=?, oldprice=?, qty=?, img=? WHERE idp=?";

        if($stmt = mysqli_prepare($mysqli, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssssi", $param_idg_1, $param_idg_2, $param_product_name, $param_product_details, $param_newprice, $param_oldprice, $param_qty, $param_img, $param_id);

            // Set parameters
            $param_idg_1 = $idg_1;
            $param_idg_2 = $idg_2;
            $param_product_name = $product_name;
            $param_product_details = $product_details;
            $param_newprice = $newprice;
            $param_oldprice = $oldprice;
            $param_qty = $qty;
            $param_img = $img;
            $param_id = $id;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Đã xảy ra sự cố. Vui lòng thử lại sau.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($mysqli);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);

        // Prepare a select statement
        $sql = "SELECT * FROM products WHERE idp = ?";
        if($stmt = mysqli_prepare($mysqli, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);

            // Set parameters
            $param_id = $id;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);

                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                    // Retrieve individual field value
                    $idg_1 = $row["idg_1"];
                    $idg_2 = $row["idg_2"];
                    $product_name = $row["product_name"];
                    $product_details = $row["product_details"];
                    $newprice = $row["newprice"];
                    $oldprice = $row["oldprice"];
                    $qty = $row["qty"];
                    $img = $row["img"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }

            } else{
                echo "Đã xảy ra sự cố. Vui lòng thử lại sau.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);

        // Close connection
        mysqli_close($mysqli);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
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
                          <div class="col-md-6" style="margin: 0 auto;">
                              <div class="page-header">
                                  <h3>Chỉnh Sửa Sản Phẩm</h3>
                              </div>
                              <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">

                                <div class="form-group <?php echo (!empty($product_name_err)) ? 'has-error' : ''; ?>">
                                    <label>Tên sản phẩm</label>
                                    <textarea name="product_name" class="form-control" rows="1"><?php echo $product_name; ?></textarea>
                                    <span class="help-block"><?php echo $product_name_err;?></span>
                                </div>

                                  <div class="form-group <?php echo (!empty($idg_1_err)) ? 'has-error' : ''; ?>">
                                      <label>Idg_1</label>
                                      <input type="text" name="idg_1" class="form-control" value="<?php echo $idg_1; ?>">
                                      <span class="help-block"><?php echo $idg_1_err;?></span>
                                  </div>

                                  <div class="form-group <?php echo (!empty($idg_2_err)) ? 'has-error' : ''; ?>">
                                      <label>Idg_2</label>
                                      <input type="text" name="idg_2" class="form-control" value="<?php echo $idg_2; ?>">
                                      <span class="help-block"><?php echo $idg_2_err;?></span>
                                  </div>

                                  <div class="form-group <?php echo (!empty($product_details_err)) ? 'has-error' : ''; ?>">
                                      <label>Chi tiết</label>
                                      <textarea name="product_details" class="form-control" rows="5"><?php echo $product_details; ?></textarea>
                                      <span class="help-block"><?php echo $product_details_err;?></span>
                                  </div>

                                  <div class="form-group <?php echo (!empty($newprice_err)) ? 'has-error' : ''; ?>">
                                      <label>Giá mới</label>
                                      <input type="text" name="newprice" class="form-control" value="<?php echo $newprice; ?>">
                                      <span class="help-block"><?php echo $newprice_err;?></span>
                                  </div>

                                  <div class="form-group <?php echo (!empty($oldprice_err)) ? 'has-error' : ''; ?>">
                                      <label>Giá cũ</label>
                                      <input type="text" name="oldprice" class="form-control" value="<?php echo $oldprice; ?>">
                                      <span class="help-block"><?php echo $oldprice_err;?></span>
                                  </div>

                                  <div class="form-group <?php echo (!empty($qty_err)) ? 'has-error' : ''; ?>">
                                      <label>Số lượng sản phẩm</label>
                                      <input type="text" name="qty" class="form-control" value="<?php echo $qty; ?>">
                                      <span class="help-block"><?php echo $qty_err;?></span>
                                  </div>

                                  <div class="form-group <?php echo (!empty($img_err)) ? 'has-error' : ''; ?>">
                                      <label>Tên hình ảnh</label>
                                      <textarea name="img" class="form-control" rows="1" placeholder="Ví dụ: abc.jpg"><?php echo $img; ?></textarea>
                                      <span class="help-block"><?php echo $img_err;?></span>
                                  </div>
                                  <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                                  <input type="submit" class="btn btn-primary" value="Chỉnh Sửa">
                                  <a href="index.php" class="btn btn-default">Trở lại</a>

                              </form>
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
