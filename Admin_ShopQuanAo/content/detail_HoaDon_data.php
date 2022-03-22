<?php
	include $level.db_path.'db.php';
	$MaHD = $_GET['idMaHD'];
	$Ct_HoaDon_rowsdata = DP::run_query("SELECT * FROM CT_HOADON WHERE MaHD=? and trangthai =1",[$MaHD],2);
?>
