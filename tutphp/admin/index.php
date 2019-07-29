<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
if(!isset($_SESSION["username"])){
  header("location:login.php");
}
include 'config.php';
?>

<?php
$myDB = new mysqli('localhost', 'root', '', 'test2');
mysqli_query($myDB,"SET NAMES 'utf8'");
$a = "SELECT * FROM `products` WHERE idg_1=1 ORDER BY `idp`";//Lấy ra ở Điện Thoại
$b = "SELECT * FROM `products` WHERE idg_1=2 ORDER BY `idp`";//Lấy ra ở Phụ Kiện
$result1 = $myDB->query($a); //Kết quả Điện Thoại
$result2 = $myDB->query($b); //Kết quả Phụ Kiện
$dem1 = 0; //Đếm Điện Thoại
$tong1 = 0;
$dem2 = 0; //Đếm Phụ Kiện
$tong2 = 0;
while ($row = $result1->fetch_assoc()) {
  $tong1 = $tong1 + $row["newprice"]*$row["qty"];
  $dem1++;
}
while ($row = $result2->fetch_assoc()) {
  $tong2 = $tong2 + $row["newprice"]*$row["qty"];
  $dem2++;
}
$nam = $dem1;
$nu = $dem2;
$dataPoints = array(
  array("label"=> "Phụ Kiện", "y"=> $nu),
  array("label"=> "Điện Thoại", "y"=> $nam),
);
$dataPoints1 = array(
  array("label"=> "Phụ Kiện", "y"=> $tong2),
  array("label"=> "Điện Thoại", "y"=> $tong1),
);
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- <meta charset="utf-8"> -->
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
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
    div.scroll {
    width: 100%;
    max-height: 400px;
    overflow-y: scroll;
    }
    /* width */
#scroll::-webkit-scrollbar {
    width: 12px;
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
    <script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "#,##0 sản phẩm",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

var chart = new CanvasJS.Chart("chartContainer1", {
	animationEnabled: true,
	exportEnabled: true,
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "#,##0đ",
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

}
</script>

</head>

<body>
  <?php
    $title = '';
    if(!empty($_POST['product_name'])){
      $title = $_POST['product_name'];

    }
   ?>

  <?php
    $myDB = new mysqli('localhost', 'root', '', 'test2');
    mysqli_query($myDB,"SET NAMES 'utf8'");
    $sql = "SELECT * FROM products Where product_name like '%{$title  }%' ORDER BY idp";
    $result = $myDB->query($sql);

   ?>
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

                          <form class="form-header" action= "<?php echo $_SERVER['PHP_SELF']; ?>"method="post">
                              <input class="au-input au-input--xl" type="text" name="product_name" placeholder="Tìm kiếm" />
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
                          
                        </div>
                        <br>
                            
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                              <div class="overview-wrap">
                                  <h3 class="title-1">Sản Phẩm</h3>
                                  <a href="create.php" class="add-product-new">
                                      <i class="zmdi zmdi-plus"></i> Thêm Sản Phẩm Mới</a>
                              </div>
                              <br>
                                <div class="table-responsive table--no-card m-b-40 scroll" id="scroll">
                                    <table class="table table-borderless table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tên sản phẩm</th>
                                                <th class="text-right">Giá mới</th>
                                                <th class="text-right">Giá cũ</th>
                                                <th class="text-right">Số lượng</th>
                                                <th class="text-center">Tùy chỉnh</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<th>";
                                                echo $row['idp'];
                                                echo "</th>";

                                                echo "<td>";
                                                echo $row['product_name'];
                                                echo "</td>";

                                                echo "<td class='text-right'>";
                                                echo number_format($row["newprice"], 0, '.', '.').'đ';
                                                echo "</td>";

                                                echo "<td class='text-right'>";
                                                echo number_format($row["oldprice"], 0, '.', '.').'đ';
                                                echo "</td>";

                                                echo "<td class='text-right'>";
                                                echo $row['qty'];
                                                echo "</td>";

                                                echo "<td class='text-center'>";
                                                    echo "<a href='read.php?id=". $row['idp']
                                                    ."' title='Xem chi tiết' data-toggle='tooltip'>
                                                    <span class='glyphicon glyphicon-eye-open' id='icon'></span></a> ";

                                                    echo "<a href='update.php?id=". $row['idp']
                                                    ."' title='Chỉnh sửa' data-toggle='tooltip'>
                                                    <span class='glyphicon glyphicon-pencil' id='icon'></span></a> ";

                                                    echo "<a href='delete.php?id=". $row['idp']
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
