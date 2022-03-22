
    <!-- MAIN -->
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                <div class="panel panel-profile">
                    <div class="clearfix">
                        
                        <form action="<?php echo $level.content_path.'Insert_sp_process.php'; ?> " method="post" enctype ="multipart/form-data">
                            <fieldset>
                                <legend> <h3> Quản Lý Sản Phẩm </h3> </legend>
                                    <table id="space-table" style = "font-size:18px;">
                                        <tr>
                                            <td>Mã Sản Phẩm:</td>
                                            <td><input type="text" name="txtMaSp" required placeholder="VD: 001, 002, 003" ></td>
											
											<td>Tên Sản Phẩm:</td>
                                            <td><input type="text" name="txtTenSp" required placeholder="VD: Áo thể thao adidas" ></td>
											
                                        </tr>                                                                                                           
                                        <tr>
                                            <td>Loại Sản Phẩm :</td>
                                            <td> <select  name="txtLoaiSp"  >
												<option value = "ÁoNam"> ÁoNam </option>
												<option value = "ÁoNữ"> ÁoNữ </option>
												<option value = "QuầnNam"> QuầnNam </option>
												<option value = "QuầnNữ"> QuầnNữ </option>
												<option value = "PhụKiệnNam"> PhụKiệnNam </option>
												<option value = "PhụKiệnNữ"> PhụKiệnNữ </option>
												<option value = "TúiĐeo"> TúiĐeo </option>
												<option value = "Giầy"> Giầy </option>
												</select>
											</td>
											
											<td>Số Lượng : </td>
                                            <td><input type="text" name="txtSoLuong" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Giá:</td>
                                            <td><input type="number_format" name="txtGia" required placeholder="VD: 150.000$" ></td>
											
											<td>Size:</td>
                                           <!-- <td><input type="text" name="txtSize" required placeholder="VD: XL,S,XX,L" ></td> -->
											<td> <select  name="txtSize"  >
												<option value = "S"> S </option>
												<option value = "M"> M </option>
												<option value = "L"> L </option>
												<option value = "XL"> XL </option>
												<option value = "XXL"> XXL </option>												
												</select>
											</td>
                                        </tr>
                                        <tr>
                                            <td>Hình Ảnh:</td>
                                            <td><input type="file" name="HinhAnhSp"></td>
                                        </tr>
										 
										
                                       
                                    </table>
                                    
                            </fieldset>
                            <fieldset>
                                
								<button class="btn btn-info" type="submit" name="submitThemSP"    > Thêm </button>						
				
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