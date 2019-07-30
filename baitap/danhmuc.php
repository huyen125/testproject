<?php
	if (isset($_GET['page'])) {
		$page=$_GET['page'];
	}else{
		$page=1;
	}
	$rowPerPage=5;
	$perRow=$page*$rowPerPage-$rowPerPage;
	$sql="SELECT * FROM dmsanpham ORDER BY id_dm ASC LIMIT $perRow,$rowPerPage";
	$query=mysqli_query($conn,$sql);
	$totalRows=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM dmsanpham"));
	$totalPages=ceil($totalRows/$rowPerPage);
	$listPage="";
	for($i=1;$i<=$totalPages;$i++){
		if ($page==$i) {
			$listPage.='<li class="active"><a href="quantri.php?page_layout=danhmuc&page='.$i.'">'.$i.'</a></li>';
		}else{
			$listPage.='<li><a href="quantri.php?page_layout=danhmuc&page='.$i.'">'.$i.'</a></li>';
		}
	}

	
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

		<div class="row">
			<div class="col-lg-12">
				<h1>Quản lý danh mục sản phẩm</h1>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Danh mục sản phẩm</div>
					<div class="panel-body" style="position: relative;">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="quantri.php?page_layout=themdm" class="btn btn-primary" style="margin: 10px 0 20px 0;">Thêm danh mục</a>
								<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" class="table table-bordered">				
									<thead>
										<tr class="bg-primary">
											<th data-sortable="true">ID</th>
											<th data-sortable="true">Tên danh muc</th>
											<th data-sortable="true">Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										<?php
											while ($row= mysqli_fetch_array($query)) {
												
											
										?>
										<tr>
	                                    <td data-checkbox="true"><?php echo $row['id_dm'];?></td>
	                                    <td data-checkbox="true"><a href="quantri.php?page_layout=suadanhmuc&id_dm=<?php echo $row['id_dm']?>"><?php echo $row['ten_dm'];?></a>
	                                    </td>
	                                    <td >
	                                        <a href="quantri.php?page_layout=suadanhmuc&id_dm=<?php echo $row['id_dm']?>" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
	                                        <a href="xoadm.php?id_dm=<?php echo $row['id_dm'];?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
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
		</div>
</div><!--/.row-->
