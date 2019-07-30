<?php
	$id_sp=$_GET['id_sp'];

	$sqlDm="SELECT * FROM dmsanpham";
	$queryDm= mysqli_query($conn,$sqlDm);
	$sql="SELECT * FROM sanpham WHERE id_sp=$id_sp";
	$query=mysqli_query($conn,$sql);
	$row= mysqli_fetch_array($query);
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
			$anh_sp=$_POST['anh_sp'];
		}else{
			$anh_sp=$_FILES['anh_sp']['name'];
			$tmp_name=$_FILES['anh_sp']['tmp_name'];
		}
		$id_dm=$_POST['id_dm'];
		$dac_biet=$_POST['dac_biet'];
		if (isset($ten_sp) && isset($gia_sp) && isset($bao_hanh) && isset($phu_kien) && isset($tinh_trang) && isset($khuyen_mai) && isset($trang_thai) && isset($chi_tiet_sp) && isset($dac_biet)) {
			move_uploaded_file($tmp_name,'img'.$anh_sp);
			$sql="UPDATE sanpham SET ten_sp='$ten_sp',gia_sp='$gia_sp',bao_hanh='$bao_hanh',khuyen_mai='$khuyen_mai',"."phu_kien='phu_kien',tinh_trang='$tinh_trang',trang_thai='$trang_thai',"."chi_tiet_sp='$chi_tiet_sp',dac_biet='$dac_biet',anh_sp='$anh_sp',id_dm='$id_dm' WHERE id_sp=$id_sp";
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
					<div class="panel-heading">Sửa sản phẩm</div>
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Tên sản phẩm</label>
										<input required type="text" name="ten_sp" class="form-control" value="<?php 
										if (isset($_POST['ten_sp'])) {
											echo $_POST['ten_sp'];
										}else{
											echo $row['ten_sp'];
										} ?>">
									</div>
									<div class="form-group" >
										<label>Giá sản phẩm</label>
										<input required type="text" name="gia_sp" class="form-control"  value="<?php 
										if (isset($_POST['gia_sp'])) {
											echo $_POST['gia_sp'];
										}else{
											echo $row['gia_sp'];
										} ?>">
									</div>
									<div class="form-group" >
										<label>Ảnh sản phẩm</label>
										<input type="file" name="anh_sp"><input type="hidden" name="anh_sp" value="<?php echo $row['anh_sp'];?>">
					                    
									</div>
									<div class="form-group" >
										<label>Phụ kiện</label>
										<input required type="text" name="phu_kien" class="form-control"  value="<?php 
										if (isset($_POST['phu_kien'])) {
											echo $_POST['phu_kien'];
										}else{
											echo $row['phu_kien'];
										} ?>">
									</div>
									<div class="form-group" >
										<label>Bảo hành</label>
										<input required type="text" name="bao_hanh" class="form-control"  value="<?php 
										if (isset($_POST['bao_hanh'])) {
											echo $_POST['bao_hanh'];
										}else{
											echo $row['bao_hanh'];
										} ?>">
									</div>
									<div class="form-group" >
										<label>Khuyến mãi</label>
										<input required type="text" name="khuyen_mai" class="form-control"  value="<?php 
										if (isset($_POST['khuyen_mai'])) {
											echo $_POST['khuyen_mai'];
										}else{
											echo $row['khuyen_mai'];
										} ?>">
									</div>
									<div class="form-group" >
										<label>Tình trạng</label>
										<input required type="text" name="tinh_trang" class="form-control"  value="<?php 
										if (isset($_POST['tinh_trang'])) {
											echo $_POST['tinh_trang'];
										}else{
											echo $row['tinh_trang'];
										} ?>">
									</div>
									<div class="form-group" >
										<label>Trạng thái</label>
										<select required name="trang_thai" class="form-control"  value="<?php echo $row['trang_thai'];?>">
											<option value="1">Còn hàng</option>
											<option value="0">Hết hàng</option>
					                    </select>
									</div>
									<div class="form-group" >
										<label>Thông tin chi tiết</label>
										<textarea required name="chi_tiet_sp" rows="3" class="form-control" ><?php 
										if (isset($_POST['chi_tiet_sp'])) {
											echo $_POST['chi_tiet_sp'];
										}else{
											echo $row['chi_tiet_sp'];
										} ?></textarea>
									</div>
									<div class="form-group" >
										<label>Nhà cung cấp</label>

										<select name="id_dm" class="form-control">
											<?php
												while ($rowDm= mysqli_fetch_array($queryDm)) {
													
												
											?>
											<option 

												<?php
													if ($row['id_dm']==$rowDm['id_dm']) {
														echo 'selected="selected"';
													}
												?>



											value="<?php echo $rowDm['id_dm'];?>"><?php echo $rowDm['ten_dm'];?></option>
											<?php
												}
											?>
					                    </select>
									</div>
									<div class="form-group" >
										<label>Sản phẩm đặc biệt</label><br>
										Có: <input type="radio" name="dac_biet" 
												<?php
													if ($row['dac_biet']==1) {
														echo "checked";
													}
												?>
										id="optionsRadiosl" value="1">
										Không: <input type="radio"  name="dac_biet"

											<?php
													if ($row['dac_biet']==0) {
														echo "checked";
													}
												?>
										  id="optionsRadiosl" value="0">
									</div>
									<button type="submit" class="btn btn-primary" name="submit">Cập nhật</button>
									
								</div>
							</div>
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>