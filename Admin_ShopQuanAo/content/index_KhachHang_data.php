<?php
	include $level.db_path.'db.php';
	$DS_KhachHang_rowsdata = DP::run_query("SELECT * FROM KhachHang WHERE TrangThai=1",[],2); 
?>