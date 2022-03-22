<?php
	include $level.db_path.'db.php';
	$DS_SanPham_rowsdata = DP::run_query("SELECT * FROM SanPham WHERE TrangThai=1",[],2); 
?>