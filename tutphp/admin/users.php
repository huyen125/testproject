<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
if(!isset($_SESSION["username"])){
  header("location:login.php");
}
include '../config.php';
?>

<?php
$myDB = new mysqli('localhost', 'root', '', 'test2');
mysqli_query($myDB,"SET NAMES 'utf8'");
$a = "SELECT * FROM `users` ORDER BY `idu`";
$result1 = $myDB->query($a);
$dem1 = 0; //Tổng đơn hàng
$tong1 = 0; //Tổng số sản phẩm
$tong2 = 0; //Tổng tiền
while ($row = $result1->fetch_assoc()) {
  $dem1++;
  if($row["type"] == "admin"){
    $tong1++;
  }
  else if($row["type"] == "user"){
    $tong2++;
  }
}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Page-->
    <title>Users</title>
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

    /*Thêm người dùng*/

    a.add-product-new {
      background: #e56a10;
      color: #fff;
      border: 1px solid #e56a10;
      padding: 7px;
      border-radius: 5px;
    }
    div.scroll {
    width: 100%;
    max-height: 400px;
    overflow-y: scroll;
    }
    /* width */
#scroll::-webkit-scrollbar {
    width: 10px;
}

/* Track */
#scroll::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey;
  border-radius: 10px;
}

/* Handle */
#scroll::-webkit-scrollbar-thumb {
    background: #e56a10;
    border-radius: 10px;
}

/* Handle on hover */
#scroll::-webkit-scrollbar-thumb:hover {
    background: #b75914;
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
                          <a href="index.php">
                              <i class="fas fa-book"></i>Sản Phẩm</a>
                      </li>
                      <li>
                          <a href="users.php" style="color: #e56a10;">
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
                        <div class="col-lg-12">
                          <div class="col-lg-4">
                              <div class="statistic__item statistic__item--green" style="border-radius: 10px;">
                                  <h1 style="font-size: 20px;color: #fff;">Tổng người dùng</h1>
                                  <hr>
                                  <h2 style="color: #fff;"><?php echo $dem1; ?></h2>
                                  <span style="color: #F5F5F5;">người</span>
                              </div>
                          </div>
                          <div class="col-lg-4">
                              <div class="statistic__item statistic__item--orange" style="border-radius: 10px;background: #e56a10;">
                                  <h1 style="font-size: 20px;color: #fff;">Số tài khoản Admin</h1>
                                  <hr>
                                  <h2 style="color: #fff;"><?php echo $tong1; ?></h2>
                                  <span style="color: #F5F5F5;">admin</span>
                              </div>
                          </div>
                          <div class="col-lg-4">
                              <div class="statistic__item statistic__item--blue" style="border-radius: 10px;">
                                <h1 style="font-size: 20px;color: #fff;">Số tài khoản User</h1>
                                <hr>
                                <h2 style="color: #fff;"><?php echo $tong2; ?></h2>
                                <span style="color: #F5F5F5;">người</span>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-12">
                            <div class="overview-wrap">
                                <h3 class="title-1">Người dùng</h3>
                            </div>
                            <br>
                            <?php
                              $myDB = new mysqli('localhost', 'root', '', 'test2');
                              mysqli_query($myDB,"SET NAMES 'utf8'");
                              $sql = "SELECT * FROM `users` ORDER BY `idu`";
                              $result = $myDB->query($sql);
                             ?>
                              <div class="table-responsive table--no-card m-b-40 scroll" id="scroll">
                                  <table class="table table-borderless table-striped">
                                      <thead>
                                          <tr>
                                              <th>ID Users</th>
                                              <th>Họ Tên</th>
                                              <th>Địa Chỉ</th>
                                              <th class="text-right">Thành Phố</th>
                                              <th class="text-right">Email</th>
                                              <th class="text-right">Kiểu tài khoản</th>
                                              <th class="text-right">Tùy chỉnh</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <?php
                                            while ($row = $result->fetch_assoc()) {
                                              echo "<tr>";

                                              echo "<td>";
                                              echo $row['idu'];
                                              echo "</td>";

                                              echo "<td>";
                                              echo $row['lname'].' '; echo $row['fname'];
                                              echo "</td>";

                                              echo "<td>";
                                              echo $row['address'];
                                              echo "</td>";

                                              echo "<td class='text-right'>";
                                              echo $row['city'];
                                              echo "</td>";

                                              echo "<td class='text-right'>";
                                              echo $row['email'];
                                              echo "</td>";

                                              echo "<td class='text-right'>";
                                              echo $row['type'];
                                              echo "</td>";

                                              echo "<td class='text-center'>";
                                              echo "<a href='delete-users.php?id=". $row['idu']
                                                  ."' title='Xóa' data-toggle='tooltip'>
                                                  <span class='glyphicon glyphicon-trash' id='icon'></span></a>";
                                              echo "</td>";

                                              echo "</tr>";
                                            }
                                           ?>
                                      </tbody>
                                  </table>
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
