
	<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Tables</h3>
					<div class="row">
						
						<div class="col-md-12">
							<!-- TABLE NO PADDING -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Thông Tin Tài Khoản</h3>
								</div>
								<div class="panel-body no-padding">
								<!-- form dang ky  -->
								<form action=" <?php echo $level.content_path.'Update_tk_process';	 ?> " method="post">
									<table class="table">
										<thead>
											<tr>
												<th>#</th>
												<th>#</th>
												<th>#</th>
												<th>#</th>
												
											</tr>
										</thead>
										<tbody>
											<tr>
										<td>Tên tài khoản:</td>
										<td><input type="text" name="txtTenTK" required  value = " <?php echo $_GET['tk'] ?>"></td>
									</tr>
									<tr>
										<td>Mật khẩu:</td>
										<td><input type="password" name="txtMK" required></td>
									</tr>
									<tr>
										<td>ID chủ tài khoản:</td>
										<td><input type="number_format" name ="txtIDTaiKhoan" required></td>
									</tr>
									  <tr>
										<td>Loại Tài Khoản:</td>
									   <td> <select  name="txtLoaiTk"  >
											<option value = "ADMIN"> ADMIN </option>
											<option value = "KháchHàng"> KháchHàng </option>										
											</select>
										</td>
									</tr>
				
										 <fieldset>
											<button class="btn btn-info" type="submit" name="submitSuaTK" > Sửa Tài Khoản </button>
									
										</fieldset>
										</tbody>
									</table>
								</div>
								</form>
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
