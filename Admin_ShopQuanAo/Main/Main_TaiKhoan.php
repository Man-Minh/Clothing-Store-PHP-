<?php
	include $level.content_path.'index_TaiKhoan_data.php';
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
									<h3 class="panel-title">Danh Sách Tài Khoản</h3>
								</div>
								<div class="panel-body">
									<table class="table">
										<thead>
											<tr>
												<th>Tên đăng nhập</th>
												<th>Mật khẩu </th>
												<th>Loại tài khoản</th>
												<th>ID chủ tài khoản</th>
												<th></th>
												<th></th>
											</tr>
										</thead>
										<tbody>
										<?php foreach($DS_TaiKhoan_rowsdata as $Taikhoan) { ?>
											<tr>
												<td> <?php echo $Taikhoan['TenDangNhap']; ?> </td>
												<td> <?php echo $Taikhoan['MatKhau']; ?> </td>
												<td> <?php echo $Taikhoan[2]; ?> </td>
												<td> <?php echo $Taikhoan['IDKhachHang']; ?> </td>
												<td>  <a href= " <?php echo $level.pages_path.'QuanLySuaTaiKhoan.php?tk='.$Taikhoan['TenDangNhap']; ?> " > <i class="fas fa-edit"> </i>  </a> </td>
												<td> <a href= " <?php echo $level.content_path.'Delete_tk_process.php?tk='.$Taikhoan['TenDangNhap']; ?> " > <i class="fa fa-trash">  </i>   </a> </td>
											</tr>
										<?php } ?>
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
