<?php
	include $level.content_path.'index_HoaDon_data.php';
?>
	<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<!-- BASIC TABLE -->
							<div class="panel">
								<div class="panel-heading">
									<h1 class="panel-title"><b>Danh sách đơn hàng đã duyệt</b></h1>
								</div>
								<div class="panel-body">
									<table class="table">
										<thead>
											<tr>
												<th>Mã Hóa Đơn</th>
												<th>Ngày Lập Hóa Đơn</th>
												<th>ID Khách Hàng</th>
												<th>Thành Tiền</th>
												<th>Trạng Thái</th>	
												<th>Xem Chi Tiết</th>	
											</tr>
										</thead>
										<tbody>
										<?php foreach ($DS_HoaDon_rowsdata as $hoadon) { ?>
											<tr>
												<td> <?php echo $hoadon['MaHD']; ?> </td>
												<td> <?php echo $hoadon['NgayLapHD']; ?> </td>
												<td> <?php echo $hoadon['IDKhachHang']; ?> </td>
												<td> <?php echo $hoadon['ThanhTien']; ?> </td>
												<td> <?php echo $hoadon['TrangThai']; ?> </td>
												<th><a href=" <?php echo $level.pages_path.'detail_HoaDon.php?idMaHD='.$hoadon['MaHD']; ?> " target="_blank" title="Nhấp vào đây để đến
Chi Tiet">Xem Chi Tiet..</a><th>			
												<td> <a href= " <?php echo $level.content_path.'Delete_HoaDon_process.php?mahd='.$hoadon['MaHD']; ?> " > <i class="fa fa-trash">  </i>   </a> </td>
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
