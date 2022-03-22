
 <!-- MAIN -->
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                <div class="panel panel-profile">
                    <div class="clearfix">
                        

                        <form action=" <?php echo $level.content_path.'Update_CTHoaDon_process.php'; ?> " method="post">
                            <fieldset>
                                <legend> <h3> Quản Lý Đơn Hàng  </h3> </legend>
                                    <table id="space-table">
                                        <tr>
                                            <td>Mã Hóa Đơn:</td>
                                            <td><input type="text" name="txtMaHD"  value = '<?php echo $_GET['mahd'];?>'  > </td>
											
											<td>Số Lượng:</td>
                                            <td><input type="text" name="txtSoLuong" required placeholder="VD: 1, 2, 3" ></td>
                                        </tr>
										
                                                                 
                                    </table>
                                    
                            </fieldset>
                            <fieldset>
                                <button class="btn btn-info" type="submit" name="submitSuaHd"> Sửa đơn </button>								
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