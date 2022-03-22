<?php
	include $level.content_path.'index_SanPham_data.php';
?>
  <!-- MAIN -->
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                <div class="panel panel-profile">
                    <div class="clearfix">
                        
			
					<h3 class="page-title">Tables</h3>
					<div class="row">
						<div class="col-md-12">
							<!-- BASIC TABLE -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Danh Sách Sản Phẩm</h3>
								</div>
								<div class="panel-body">
									<table class="table">
										<thead>
											<tr>
												<th>Mã sản phẩm</th>
												<th>Ảnh</th>
												<th>Tên sản phẩm </th>
												<th>Đơn giá</th>
												<th>Số lượng</th>
												<th>Loại sản phẩm</th>
												<th>Size</th>
												<th></th>
												<th></th>
											</tr>
										</thead>
										<tbody>
										<?php foreach($DS_SanPham_rowsdata as $Sp) { ?>
											<tr>
												<td> <?php echo $Sp['MaSp'] ; ?> </td>
												<td> <img src = "<?php echo $level.$Sp['Anh'] ;?> " width="50" alt="Không load được ảnh, vui lòng thử lại sau" >  </td>												
												<td> <?php echo $Sp['TenSp'] ; ?> </td>
												<td> <?php echo $Sp['DonGia'] ;?> </td>
												<td> <?php echo $Sp['SoLuong'] ;?> </td>
												<td> <?php echo $Sp['LoaiSp'] ;?> </td>
												<td> <?php echo $Sp['Size'] ;?> </td>
												<td>  <a href= " <?php echo $level.pages_path.'QuanLySuaSanPham.php?masp='.$Sp['MaSp']; ?> " > <i class="fas fa-edit"> </i>  </a> </td>
												<td> <a href= " <?php echo $level.content_path.'Delete_sp_process.php?masp='.$Sp['MaSp']; ?> " > <i class="fa fa-trash">  </i>   </a> </td>
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