<?php
	
	$sqlDm="SELECT * FROM dmsanpham";
	$queryDm= mysqli_query($conn, $sqlDm);
	if (isset($_POST['submit'])) {
		$ten_sp=$_POST['ten_sp'];
		$gia_sp=$_POST['gia_sp'];
		$bao_hanh=$_POST['bao_hanh'];
		$phu_kien=$_POST['phu_kien'];
		$tinh_trang=$_POST['tinh_trang'];
		$khuyen_mai=$_POST['khuyen_mai'];
		$trang_thai=$_POST['trang_thai'];
		$chi_tiet_sp=$_POST['chi_tiet_sp'];
		if ($_FILES['anh_sp']['name']=='') {
			$error_anh_sp='<span style="color: red;">(*)</span>';
		}else{
			$anh_sp=$_FILES['anh_sp']['name'];
			$tmp_name=$_FILES['anh_sp']['tmp_name'];
		}


		if ($_POST['id_dm']=='unselect') {
			$error_id_dm='<span style="color: red;">(*)</span>';
		}else{
			$id_dm=$_POST['id_dm'];
		}
		$dac_biet=$_POST['dac_biet'];

		if (isset($ten_sp) && isset($gia_sp) && isset($bao_hanh) && isset($phu_kien) && isset($tinh_trang) && isset($khuyen_mai) && isset($trang_thai) && isset($chi_tiet_sp) && isset($anh_sp) && isset($id_dm) && isset($dac_biet)) {
			move_uploaded_file($tmp_name, 'img/.$anh_sp');
			$sql="INSERT INTO sanpham(ten_sp,gia_sp,bao_hanh,phu_kien,tinh_trang,khuyen_mai,trang_thai,"."chi_tiet_sp,
			anh_sp,id_dm,dac_biet) VALUES('$ten_sp','$gia_sp','$bao_hanh','$phu_kien','$tinh_trang','$khuyen_mai','$trang_thai',"."'$chi_tiet_sp','$anh_sp','$id_dm','$dac_biet')";
			$query=mysqli_query($conn,$sql);
			header('location: quantri.php?page_layout=sanpham');
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
					<div class="panel-heading">Thêm sản phẩm</div>
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Tên sản phẩm</label>
										<input required type="text" name="ten_sp" class="form-control">
									</div>
									<div class="form-group" >
										<label>Giá sản phẩm</label>
										<input required type="text" name="gia_sp" class="form-control">
									</div>
									<div class="form-group" >
										<label>Ảnh sản phẩm</label>
										<input id="img" type="file" name="anh_sp">
					                   
									</div>
									<div class="form-group" >
										<label>Phụ kiện</label>
										<input required type="text" name="phu_kien" class="form-control">
									</div>
									<div class="form-group" >
										<label>Bảo hành</label>
										<input required type="text" name="bao_hanh" class="form-control">
									</div>
									<div class="form-group" >
										<label>Khuyến mãi</label>
										<input required type="text" name="khuyen_mai" class="form-control">
									</div>
									<div class="form-group" >
										<label>Tình trạng</label>
										<input required type="text" name="tinh_trang" class="form-control">
									</div>
									<div class="form-group" >
										<label>Trạng thái</label>
										<input type="text" class="form-control" name="trang_thai" value="còn hàng">
											
					                   
									</div>
									<div class="form-group" >
										<label>Thông tin chi tiết</label>
										<textarea required name="chi_tiet_sp" rows="3" class="form-control"></textarea>
									</div>
									<div class="form-group" >
										<label>Danh mục</label>
										<select name="id_dm" class="form-control">
											<option value="unselect" selected>Lựa chọn nhà cung cấp</option>
											<?php
												while ($rowDm=mysqli_fetch_array($queryDm)) {
													
												

											?>
											<option value="<?php echo $rowDm['id_dm'];?>"><?php echo $rowDm['ten_dm'];?></option>
											<?php
												}
											?>
					                    </select>
									</div>
									<div class="form-group" >
										<label>Sản phẩm nổi bật</label><br>
										Có: <input type="radio" name="dac_biet" value="1">
										Không: <input type="radio" checked name="featured" value="0">
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