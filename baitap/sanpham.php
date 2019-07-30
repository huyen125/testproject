<?php
	if (isset($_GET['page'])) {
		$page=$_GET['page'];
	}
	else{
		$page=1;
	}
	$rowsPerPage=5;
	$perRow=$page*$rowsPerPage-$rowsPerPage;

	$sql="SELECT *FROM sanpham INNER JOIN dmsanpham ON sanpham.id_dm=dmsanpham.id_dm ORDER BY id_sp DESC LIMIT $perRow,$rowsPerPage";
	$query=mysqli_query($conn,$sql);
	$totalRows=mysqli_num_rows(mysqli_query($conn,"SELECT *FROM sanpham"));
	$totalPages=ceil($totalRows/$rowsPerPage);
	$listPage="";
	for ($i=1;$i<=$totalPages;$i++) { 
		if ($page==$i) {
			$listPage.='<li class="active"><a href="quantri.php?page_layout=sanpham&page='.$i.'">'.$i.'</a></li>';
		}else{
			$listPage.='<li><a href="quantri.php?page_layout=sanpham&page='.$i.'">'.$i.'</a></li>';
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
					<div class="panel-heading">Danh sách sản phẩm</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="quantri.php?page_layout=themsp" class="btn btn-primary" style="margin: 10px 0 20px 0;">Thêm sản phẩm</a>
								<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" class="table table-bordered">				
									<thead>
										<tr class="bg-primary">
											<th data-sortable="true">ID</th>
											<th data-sortable="true">Tên Sản phẩm</th>
											<th data-sortable="true">Giá sản phẩm</th>
											<th data-sortable="true">Ảnh sản phẩm</th>
											<th data-sortable="true">Danh mục</th>
											
											<th data-sortable="true">Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										<?php
											while ($row= mysqli_fetch_array($query)) {
												
											
										?>
										<tr>
											<td data-checkbox="true"><?php echo $row['id_sp'];?></td>
											<td data-checkbox="true"><a href="quantri.php?page_layout=suasp&id_sp=<?php echo $row['id_sp'];?>"><?php echo $row['ten_sp'];?></a></td>
											<td data-checkbox="true"><?php echo $row['gia_sp'];?></td>
											<td>
												<img width="200px" src="img/<?php echo $row['anh_sp'];?>" class="thumbnail">
											</td>
											<td data-checkbox="true"><?php echo $row['ten_dm'];?></td>
											<td>
												<a href="quantri.php?page_layout=suasp&id_sp=<?php echo $row['id_sp'];?>" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												 <a href="xoasp.php?id_sp=<?php echo $row['id_sp'];?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
											</td>
										</tr>
										<?php
											}
										?>
									</tbody>
								</table>
								<ul class="pagination" style="float:right;">
									<?php
										echo $listPage;
									?>
								</ul>							
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>