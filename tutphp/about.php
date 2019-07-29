<!DOCTYPE HTML>
<html lang="vi">
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
		<link rel="stylesheet" href="css/style1.css">
		<link rel="stylesheet" href="css/responsive.css">
		<link rel="stylesheet" href="css/style2.css">
		<!-- Animate.css -->
		<link rel="stylesheet" href="cssgioithieu/animate.css">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="cssgioithieu/icomoon.css">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="cssgioithieu/bootstrap.css">
		
		<!-- Theme style  -->
		<link rel="stylesheet" href="cssgioithieu/style.css">
		
		<!-- Modernizr JS -->
		<script src="jsgioithieu/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
		<div class="header-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="user-menu">
							<ul style="text-align: right;">
								<?php
							if ( isset( $_SESSION[ 'username' ] ) ) {
								echo '<li><a href="logout.php"><i class="fa fa-user"></i>Đăng xuất</a></li>';
							} else {
								echo '<li><a href="login.php"><i class="fa fa-user"></i>Đăng Nhập</a></li>';
								echo '<li><a href="dangky.php"><i class="fa fa-user"></i>Đăng ký</a></li>';
							}
							?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End header area --> 
		
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
								<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
									<input type="text" name="product_name"/>
									<input type="submit" value="Tìm kiếm" name="Tìm kiếm"/>
								</form>
							</center>
						</div>
					</div>
					
					<!-- Hết form search -->
					
				</div>
			</div>
		</div>
		<!-- End site branding area --> 
		
		<!-- Mainmenu area -->
		
		    <div id="menu">

      <ul>
        <li class="active" style="background-color: #b75914;"><a href="index.php">Trang Chủ</a></li>
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
          <li><a href="about.php">Giới Thiệu</a></li>
        </ul>
    </div>
		
		<!-- End mainmenu area -->
		<div class="fh5co-loader"></div>
		<div id="page">
			<div id="fh5co-about" class="animate-box">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<h2>Câu chuyện của chúng tôi</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<ul class="info">
								<li><span class="first-block">Tên Shop:</span>Phoenix</li>
								<li><span class="first-block">Số điện thoại:</span><span class="second-block">+ 1234 567 89</span></li>
								<li><span class="first-block">Email:</span><span class="second-block">windshop@phoenix.com</span></li>
								<li><span class="first-block">Website:</span><span class="second-block">www.windshop.com</span></li>
								<li><span class="first-block">Địa chỉ:</span>Đại học FPT, Hà Nội</li>
							</ul>
						</div>
						<div class="col-md-8">
							<h2>Chào bạn!</h2>
							<p>Chúng tôi muốn mang đến cho các bạn những trải nghiệm tốt nhất, vì vậy khi nào có thắc mắc, hãy nói với chúng tôi.</p>
							<p>Cùng với mục tiêu trở thành nhà bán lẻ điện thoại hàng đầu Việt Nam, Phoenix đã và đang không ngừng cải tiến chất lượng, dịch vụ ngày càng tốt hơn để có thể đáp ứng mọi nhu cầu của khách hàng!</p>
							<p>
							<ul class="fh5co-social-icons">
								<li><a href="#"><i class="icon-twitter2"></i></a></li>
								<li><a href="#"><i class="icon-facebook3"></i></a></li>
								<li><a href="#"><i class="icon-linkedin2"></i></a></li>
								<li><a href="#"><i class="icon-dribbble2"></i></a></li>
							</ul>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div id="fh5co-resume" class="fh5co-bg-color">
				<div class="container">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<h2>Khách hàng nói về chúng tôi</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-md-offset-0">
							<ul class="timeline">
								<li class="timeline-heading text-center animate-box">
									<div>
										<h3>CÁ NHÂN</h3>
									</div>
								</li>
								<li class="animate-box timeline-unverted">
									<div class="timeline-badge"><i class="icon-suitcase"></i></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h3 class="timeline-title">Nguyễn Bá Cường</h3>
											<span class="company">Company Name - 2016 - Current</span> </div>
										<div class="timeline-body">
											<p>Win Shop là nơi bán hàng uy tín lâu năm rất uy tín, giá trị tồn tại cho đến hôm nay</p>
										</div>
									</div>
								</li>
								<li class="timeline-inverted animate-box">
									<div class="timeline-badge"><i class="icon-suitcase"></i></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h3 class="timeline-title">Phạm Quang Sáng</h3>
											<span class="company">Company Name - 2013 - 2015</span> </div>
										<div class="timeline-body">
											<p>Những sản phẩm mua tại đây đều có chất lượng đảm bảo và yên tâ sử dụng..</p>
										</div>
									</div>
								</li>
								<li class="animate-box timeline-unverted">
									<div class="timeline-badge"><i class="icon-suitcase"></i></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h3 class="timeline-title">Nguyễn Xuân Trường</h3>
											<span class="company">Company Name - 2010 - 2012</span> </div>
										<div class="timeline-body">
											<p>Dịch vụ chăm sóc khách hàng ở đây rất tốt</p>
										</div>
									</div>
								</li>
								<br>
								<li class="timeline-heading text-center animate-box">
									<div>
										<h3>DOANH NGHIỆP</h3>
									</div>
								</li>
								<li class="timeline-inverted animate-box">
									<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h3 class="timeline-title">Tập đoàn Apple</h3>
											<span class="company">University Name - 2007 - 2009</span> </div>
										<div class="timeline-body">
											<p>Cửa hàng rất uy tín trong việc giao hàng vì luôn đúng giờ</p>
										</div>
									</div>
								</li>
								<li class="animate-box timeline-unverted">
									<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h3 class="timeline-title">Tập đoàn SAMSUNG</h3>
											<span class="company">University Name - 2002 - 2006</span> </div>
										<div class="timeline-body">
											<p>Chúng tôi rất tin tưởng cách mà họ kiểm tra hàng trước khi bán cho người tiêu dùng</p>
										</div>
									</div>
								</li>
								<li class="timeline-inverted animate-box">
									<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h3 class="timeline-title">Tập đoàn NOKIA</h3>
											<span class="company">College Name - 1999 - 2001</span> </div>
										<div class="timeline-body">
											<p>Họ là những nhân viên chăm sóc khách hàng vui vẻ</p>
										</div>
									</div>
								</li>
								<li class="animate-box timeline-unverted">
									<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h3 class="timeline-title">Tập đoàn VIETTLE</h3>
											<span class="company">College Name - 1994 - 1998</span> </div>
										<div class="timeline-body">
											<p>Cách sử lý tình huống của họ làm cho khác hàng rất thoải mái</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div id="fh5co-features" class="animate-box">
				<div class="container">
					<div class="services-padding">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
								<h2>Dịch vụ của chúng tôi</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 text-center">
								<div class="feature-left"> <span class="icon"> <i class="icon-paintbrush"></i> </span>
									<div class="feature-copy">
										<h3>Website thân thiện</h3>
										<p>Website của chúng tôi thiết kế để mọi người có thể sử dụng dịch vụ dễ dàng nhất</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 text-center">
								<div class="feature-left"> <span class="icon"> <i class="icon-briefcase"></i> </span>
									<div class="feature-copy">
										<h3>Xây dựng thương hiệu</h3>
										<p>Chúng tôi luôn đảm bảo uy tín để tạo nên thương hiệu vũng mạnh nhất</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 text-center">
								<div class="feature-left"> <span class="icon"> <i class="icon-search"></i> </span>
									<div class="feature-copy">
										<h3>Phân tích</h3>
										<p>Chúng tôi phân tích ý kiến khách hàng và chỉnh sửa lại cho phù hợp nhất với tất cả mọi người</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 text-center">
								<div class="feature-left"> <span class="icon"> <i class="icon-bargraph"></i> </span>
									<div class="feature-copy">
										<h3>Phát triển thương hiệu</h3>
										<p>Chúng tôi luôn cập nhật thông tin không ngừng để bạn không bao giờ bị lỗi thời</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 text-center">
								<div class="feature-left"> <span class="icon"> <i class="icon-genius"></i> </span>
									<div class="feature-copy">
										<h3>Tiếp thị</h3>
										<p>Rất dễ để tìm được chúng tôi qua các mạng xã hội</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 text-center">
								<div class="feature-left"> <span class="icon"> <i class="icon-chat"></i> </span>
									<div class="feature-copy">
										<h3>Hỗ trợ</h3>
										<p>Hãy nhớ chúng tôi luôn lắng nghe bạn</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="fh5co-skills" class="animate-box">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<h2>Thống kê</h2>
						</div>
					</div>
					<div class="row row-pb-md">
						<div class="col-md-3 col-sm-6 col-xs-12 text-center">
							<div class="chart" data-percent="95"><span><strong>Xiaomi</strong>95%</span></div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center">
							<div class="chart" data-percent="93"><span><strong>ÁO NAM</strong>93%</span></div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center">
							<div class="chart" data-percent="90"><span><strong>Oppo</strong>90%</span></div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center">
							<div class="chart" data-percent="89"><span><strong>LG</strong>89%</span></div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center">
							<div class="chart" data-percent="85"><span><strong>Phụ kiện Xiaomi</strong>85%</span></div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center">
							<div class="chart" data-percent="90"><span><strong>Phụ kiện Samsung</strong>90%</span></div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center">
							<div class="chart" data-percent="85"><span><strong>Phụ kiện Oppo</strong>85%</span></div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center">
							<div class="chart" data-percent="90"><span><strong>Phụ kiện LG</strong>90%</span></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="progress-wrap">
								<h3>Xiaomi<span class="value-right">95%</span></h3>
								<div class="progress">
									<div class="progress-bar progress-bar-1 progress-bar-striped active" role="progressbar"
						  aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%"> </div>
								</div>
							</div>
							<div class="progress-wrap">
								<h3>Áo nam<span class="value-right">90%</span></h3>
								<div class="progress">
									<div class="progress-bar progress-bar-2 progress-bar-striped active" role="progressbar"
						  aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%"> </div>
								</div>
							</div>
							<div class="progress-wrap">
								<h3>Oppo<span class="value-right">80%</span></h3>
								<div class="progress">
									<div class="progress-bar progress-bar-3 progress-bar-striped active" role="progressbar"
						  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%"> </div>
								</div>
							</div>
							<div class="progress-wrap">
								<h3>LG<span class="value-right">85%</span></h3>
								<div class="progress">
									<div class="progress-bar progress-bar-4 progress-bar-striped active" role="progressbar"
						  aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%"> </div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="progress-wrap">
								<h3>Phụ kiện Xiaomi<span class="value-right">100%</span></h3>
								<div class="progress">
									<div class="progress-bar progress-bar-5 progress-bar-striped active" role="progressbar"
						  aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%"> </div>
								</div>
							</div>
							<div class="progress-wrap">
								<h3>Phụ kiện Samsung<span class="value-right">70%</span></h3>
								<div class="progress">
									<div class="progress-bar progress-bar-striped active" role="progressbar"
						  aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%"> </div>
								</div>
							</div>
							<div class="progress-wrap">
								<h3>Phụ kiện Oppo<span class="value-right">85%</span></h3>
								<div class="progress">
									<div class="progress-bar progress-bar-1 progress-bar-striped active" role="progressbar"
						  aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%"> </div>
								</div>
							</div>
							<div class="progress-wrap">
								<h3>Phụ kiện LG<span class="value-right">75%</span></h3>
								<div class="progress">
									<div class="progress-bar progress-bar-3 progress-bar-striped active" role="progressbar"
						  aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%"> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="fh5co-work" class="fh5co-bg-dark">
				<div class="container">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<h2>Vậy bạn muốn mua gì ở của hàng chúng tôi</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 text-center col-padding animate-box"> <a href="http://localhost/wind/shop.php?id=1.3" class="work" style="background-image: url(imagesgioithieu/portfolio-1.jpg);">
							<div class="desc">
								<h3>Xiaomi</h3>
								<span>Hình minh họa</span> </div>
							</a> </div>
						<div class="col-md-3 text-center col-padding animate-box"> <a href="http://localhost/wind/shop.php?id=1.1" class="work" style="background-image: url(imagesgioithieu/portfolio-2.jpg);">
							<div class="desc">
								<h3>Áo Nam</h3>
								<span>Hình minh họa</span> </div>
							</a> </div>
						<div class="col-md-3 text-center col-padding animate-box"> <a href="http://localhost/wind/shop.php?id=1.4" class="work" style="background-image: url(imagesgioithieu/portfolio-3.jpg);">
							<div class="desc">
								<h3>Oppo</h3>
								<span>Hình minh họa</span> </div>
							</a> </div>
						<div class="col-md-3 text-center col-padding animate-box"> <a href="http://localhost/wind/shop.php?id=1.5" class="work" style="background-image: url(imagesgioithieu/portfolio-4.jpg);">
							<div class="desc">
								<h3>LG</h3>
								<span>Hình minh họa</span> </div>
							</a> </div>
						<div class="col-md-3 text-center col-padding animate-box"> <a href="http://localhost/wind/shop.php?id=2.3" class="work" style="background-image: url(imagesgioithieu/portfolio-5.jpg);">
							<div class="desc">
								<h3>Phụ kiện Xiaomi</h3>
								<span>Hình minh họa</span> </div>
							</a> </div>
						<div class="col-md-3 text-center col-padding animate-box"> <a href="http://localhost/wind/shop.php?id=2.2" class="work" style="background-image: url(imagesgioithieu/portfolio-6.jpg);">
							<div class="desc">
								<h3>Phụ kiện Samsung</h3>
								<span>Hình minh họa</span> </div>
							</a> </div>
						<div class="col-md-3 text-center col-padding animate-box"> <a href="http://localhost/wind/shop.php?id=2.4" class="work" style="background-image: url(imagesgioithieu/portfolio-7.jpg);">
							<div class="desc">
								<h3>Phụ kiện Oppo</h3>
								<span>Hình minh họa</span> </div>
							</a> </div>
						<div class="col-md-3 text-center col-padding animate-box"> <a href="http://localhost/wind/shop.php?id=2.5" class="work" style="background-image: url(imagesgioithieu/portfolio-8.jpg);">
							<div class="desc">
								<h3>Phụ kiện LG</h3>
								<span>Hình minh họa</span> </div>
							</a> </div>
					</div>
				</div>
			</div>
			<div id="fh5co-blog">
				<div class="container">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<h2>Nổi bật</h2>
							<p>Có thể bạn muốn xem qua</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="fh5co-blog animate-box"> <a href="#" class="blog-bg" style="background-image: url(imagesgioithieu/portfolio-1.jpg);"></a>
								<div class="blog-text"> <span class="posted_on">Mar. 15th 2016</span>
									<h3><a href="http://localhost/wind/single-product.php?id=3">Quần Tây Nam</a></h3>
									<p>Chất liệu Cotton pha cao cấp 
										
										Thiết kế ống suông trẻ trung
										
										Gam màu sang trọng, thanh lịch </p>
									<ul class="stuff">
										<li><i class="icon-heart2"></i>249</li>
										<li><i class="icon-eye2"></i>308</li>
										<li><a href="http://localhost/wind/single-product.php?id=3">Xem thêm<i class="icon-arrow-right22"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="fh5co-blog animate-box"> <a href="#" class="blog-bg" style="background-image: url(imagesgioithieu/portfolio-2.jpg);"></a>
								<div class="blog-text"> <span class="posted_on">Mar. 15th 2016</span>
									<h3><a href="http://localhost/wind/single-product.php?id=1">Sơ Mi Nam Sọc Xanh</a></h3>
									<p>Chất liệu cotton pha nhẹ, thoáng mát
										
										Form slim fit, dễ kết hợp với các loại quần
										
										Kiếu áo sơ mi tay dài lịch lãm, sang trọng
										
										Thích hợp mặc trong nhiều môi trường khác
										nhau </p>
									<ul class="stuff">
										<li><i class="icon-heart2"></i>249</li>
										<li><i class="icon-eye2"></i>308</li>
										<li><a href="http://localhost/wind/single-product.php?id=1">Xem thêm<i class="icon-arrow-right22"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="fh5co-blog animate-box"> <a href="#" class="blog-bg" style="background-image: url(imagesgioithieu/portfolio-3.jpg);"></a>
								<div class="blog-text"> <span class="posted_on">Mar. 15th 2016</span>
									<h3><a href="http://localhost/wind/single-product.php?id=9">Phụ kiện Oppo Biti's Hunter</a></h3>
									<p>Kiểu dáng thể thao dành cho nữ, năng động
										
										Thiết kế với gam màu đen sang trọng và cá tính
										
										Phần đế phylon siêu nhẹ kết hợp cùng đế
										tiếp đất cao su
										
										Mũi giày được bọc cứng, có lớp đệm cao su
										bảo vệ đầu ngón chân
										
										Trọng lượng siêu nhẹ, đàn hồi và .</p>
									<ul class="stuff">
										<li><i class="icon-heart2"></i>249</li>
										<li><i class="icon-eye2"></i>308</li>
										<li><a href="http://localhost/wind/single-product.php?id=9">Xem thêm<i class="icon-arrow-right22"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="fh5co-started" class="fh5co-bg-dark">
				<div class="overlay"></div>
				<div class="container">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<h2>Hãy nói với chúng tôi nhé!</h2>
							<p>Những điều liên quan đến dịch vụ và sản phẩm chúng tôi cố gắng không để bạn phải đợi.</p>
							<p><a href="mailto:windshop@phoenix.com" class="btn btn-default btn-lg">Gửi Mail</a></p>
						</div>
					</div>
				</div>
			</div>
			<p>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0964841656337!2d105.78010801445464!3d21.028825093153067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab4cd376479b%3A0xbc2e0bb9db373ed2!2zMTAgVMO0biBUaOG6pXQgVGh1eeG6v3QsIE3hu7kgxJDDrG5oLCBOYW0gVOG7qyBMacOqbSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1538134008187" width="1350" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
			</p>
		</div>
		
		<!---->
		<div class="footer-top-area">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="footer-about-us">
							<div class="logo">
								<h1><a href="./"><img height="80px" width= "auto" src="https://s2.logaster.com/general/light/vi/logo1.png"></a></h1>
							</div>
							<p style="text-align: justify;"> Cùng với mục tiêu trở thành nhà bán lẻ điện thoại hàng đầu Việt Nam, Phoenix đã và đang không ngừng cải tiến chất lượng, dịch vụ ngày càng tốt hơn để có thể đáp ứng mọi nhu cầu của khách hàng! </p>
							<div class="footer-social"> <a href="#" target="_blank"><i class="fa fa-facebook"></i></a> <a href="#" target="_blank"><i class="fa fa-twitter"></i></a> <a href="#" target="_blank"><i class="fa fa-instagram"></i></a> </div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="footer-menu">
							<h4 style="font-size:15px; color: #fff;">BẢN ĐỒ</h4>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1565.7923915678252!2d105.78067442036041!3d21.0285681195396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7917af0f83effe1b!2zxJDhuqFpIEjhu41jIEZQVCBN4bu5IMSQw6xuaA!5e0!3m2!1svi!2s!4v1535263017566" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="footer-menu">
							<h2 style="font-size:15px; color: #fff;">DANH MỤC</h2>
							<ul>
								<li><a href="#">Điện Thoại</a> </li>
								<li><a href="#">Phụ Kiện</a> </li>
							</ul>
							<br>
							<h2 style="font-size:15px; color: #fff;">PHƯƠNG THỨC THANH TOÁN</h2>
							<div class="footer-card-icon"> <i class="fa fa-cc-mastercard"></i> <i class="fa fa-cc-paypal"></i> <i class="fa fa-cc-visa"></i> </div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="footer-newsletter">
							<h4 style="font-size:15px; color: #fff;">ĐĂNG KÝ NHẬN TIN</h4>
							<p>Đừng bỏ lỡ hàng ngàn sản phẩm và chương trình siêu hấp dẫn</p>
							<div class="newsletter-form">
								<form action="#">
									<input type="email" placeholder="Địa chỉ email của bạn">
									<input type="submit" value="Đăng ký">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End footer top area -->
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
		</div>
		<div class="gototop js-top"> <a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a> </div>
		
		<!-- jQuery --> 
		<script src="jsgioithieu/jquery.min.js"></script> 
		<!-- jQuery Easing --> 
		<script src="jsgioithieu/jquery.easing.1.3.js"></script> 
		<!-- Bootstrap --> 
		<script src="jsgioithieu/bootstrap.min.js"></script> 
		<!-- Waypoints --> 
		<script src="jsgioithieu/jquery.waypoints.min.js"></script> 
		<!-- Stellar Parallax --> 
		<script src="jsgioithieu/jquery.stellar.min.js"></script> 
		<!-- Easy PieChart --> 
		<script src="jsgioithieu/jquery.easypiechart.min.js"></script> 
		<!-- Google Map --> 
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script> 
		<script src="jsgioithieu/google_map.js"></script> 
		
		<!-- Main --> 
		<script src="jsgioithieu/main.js"></script>
	</body>
</html>
