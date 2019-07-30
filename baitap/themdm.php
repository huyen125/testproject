<?php
	if (isset($_POST['submit'])) {
		$ten_dm=$_POST['ten_dm'];
		if (isset($ten_dm)) {
			$sql="INSERT INTO dmsanpham(ten_dm) VALUES('$ten_dm')";
			$query=mysqli_query($conn, $sql);
			header('location: quantri.php?page_layout=danhmuc');
		}
	}
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sản phẩm</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Thêm danh muc</div>
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Tên danh mục</label>
										<input required type="text" name="ten_dm" class="form-control">
									</div>
									
									<button type="submit" class="btn btn-primary" name="submit">Thêm mới</button>
									
								</div>
							</div>
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>