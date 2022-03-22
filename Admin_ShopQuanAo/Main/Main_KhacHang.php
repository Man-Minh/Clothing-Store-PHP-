<?php
	include $level.content_path.'index_KhachHang_data.php';
?>
  <!-- MAIN -->
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                <div class="panel panel-profile">
                    <div class="clearfix">
					<div class="row">
						<div class="col-md-12">
							<!-- BASIC TABLE -->
							<div class="panel">
								<div class="panel-heading">
									<h1 class="panel-title"><b>Danh Sách Khách Hàng</b></h1>
								</div>
								<div class="panel-body">
									<table class="table">
										<thead>
											<tr>
												<th>ID khách hàng </th>
												<th>Họ tên </th>
												<th>SDT</th>
												<th>Email</th>												
												<th>Địa chỉ</th>
												<th></th>
												<th></th>
											</tr>
										</thead>
										<tbody>
										<?php foreach($DS_KhachHang_rowsdata as $Kh) { ?>
											<tr>
											    <td> <?php echo $Kh['IDKhachHang'] ; ?> </td>
												<td> <?php echo $Kh['HoTen'] ; ?> </td>
												<td> <?php echo $Kh['SDT'] ;?> </td>
												<td> <?php echo $Kh['Email'] ;?> </td>
												<td> <?php echo $Kh['DiaChi'] ;?> </td>
												<td>  <a href= " <?php echo $level.pages_path.'QuanLySuaKhachHang.php?makh='.$Kh['IDKhachHang']; ?> " > <i class="fas fa-edit"> </i>  </a> </td>
												<td> <a href= " <?php echo $level.content_path.'Delete_KhachHang_process.php?makh='.$Kh['IDKhachHang']; ?> " > <i class="fa fa-trash">  </i>   </a> </td>
											</tr>	
										<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END BASIC TABLE -->
						</div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
    </div>
	</div>
    <!-- END MAIN -->
    
<!-- END WRAPPER -->
<!-- Javascript -->
<script src="<?php echo $level.asset_path."vendor/jquery/jquery.min.js";?>"></script>
<script src="<?php echo $level.asset_path."vendor/bootstrap/js/bootstrap.min.js";?>"></script>
<script src="<?php echo $level.asset_path."vendor/jquery-slimscroll/jquery.slimscroll.min.js";?>"></script>
<script src="<?php echo $level.asset_path."scripts/klorofil-common.js";?>"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>