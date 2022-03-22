	
    <!-- MAIN -->
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                <div class="panel panel-profile">		
                    <div class="clearfix">
                        
                        <form action=" <?php echo $level.content_path.'Update_KhachHang_process.php'; ?> " method="post" enctype ="multipart/form-data">
                            <fieldset>
                                <legend> <h3> Quản Lý Khách Hàng </h3> </legend>
                                    <table id="space-table">
                                        <tr>
										
                                            <td>Họ tên:</td>
                                            <td><input type="text" name="txtHoTen" required placeholder="VD: Nguyễn văn an" ></td>
											
											<td>SĐT:</td>
                                            <td><input type="text" name="txtSDT" required placeholder="VD: 091 730 64 19" ></td>
											
                                        </tr>
                                       
                                        
                                       
                                        <tr>
                                           <td>Email:</td>
                                            <td><input type="mail" name="txtEMAIL" required placeholder="VD: an@gmail.com" ></td>
											
											<td>Ảnh đại diện : </td>
                                            <td><input type="file" name="AvatarKh" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Ngày sinh:</td>
                                            <td><input type="date" name="txtNgaySinh" required  ></td>
											
											<td>Giới tính:</td>
                                            <td> <select  name="txtGioiTinh"  >
												<option value = "Nam"> Nam </option>
												<option value = "Nữ"> Nữ </option>
												<option value = "Khác"> Khác </option>												
												</select>
											</td>
                                        </tr>
                                        <tr>
                                            <td>Địa chỉ:</td>
                                            <td><input type="text" name="txtDiaChi" placeholder="VD: 53 Khu phố 7 TPHCM"></td>
											
											
                                        </tr>
										 
										
                                       
                                    </table>
                                    
                            </fieldset>
                            <fieldset>                               
								<button class="btn btn-info" type="submit" name="submitThemKH"  > Thêm </button>										
                            </fieldset>
                           </form>
									
						
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
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