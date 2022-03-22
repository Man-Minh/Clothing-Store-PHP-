<?php 
	include $level.content_path.'detail_HoaDon_data.php';
 ?>
<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Tables</h3>
					<div class="row">
						<div class="col-md-12">
							<!-- BASIC TABLE -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Chi Tiết Hóa Đơn</h3>
								</div>
								<div class="panel-body">
									<table class="table">
										<thead>
											<tr>
												<th>Mã Hóa Đơn</th>
												<th>Mã Sản Phẩm</th>
												<th>Đơn Giá</th>
												<th>Số Lượng</th>
												<th>Tên sản Phẩm</th>												
											</tr>
										</thead>
										<tbody>
										<?php foreach ($Ct_HoaDon_rowsdata as $Ct_HoaDon) { ?>
											<tr>
												<td> <?php echo $Ct_HoaDon['MaHD']; ?> </td>
												<td> <?php echo $Ct_HoaDon['MaSp']; ?> </td>
												<td> <?php echo $Ct_HoaDon['DonGia']; ?> </td>
												<td> <?php echo $Ct_HoaDon['SoLuong']; ?> </td>
												<td> <?php echo $Ct_HoaDon['TenSp']; ?> </td>
												
												<td>  <a href= " <?php echo $level.pages_path.'QuanLySuaHoaDon.php?mahd='.$Ct_HoaDon['MaHD']; ?> " > <i class="fas fa-edit"> </i>  </a> </td>
												
											</tr>
										<?php }; ?>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END BASIC TABLE -->
						</div>
						
							<!-- END TABLE NO PADDING -->
						</div>
					</div>
					
			</div>
			</div>			
		
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="<?php echo $level.asset_path."vendor/jquery/jquery.min.js";?>"></script>
<script src="<?php echo $level.asset_path."vendor/bootstrap/js/bootstrap.min.js";?>"></script>
<script src="<?php echo $level.asset_path."vendor/jquery-slimscroll/jquery.slimscroll.min.js";?>"></script>
<script src="<?php echo $level.asset_path."scripts/klorofil-common.js";?>"></script>

</body>

</html>
