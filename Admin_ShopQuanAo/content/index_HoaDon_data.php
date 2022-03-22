<?php
	include $level.db_path.'db.php'; // include den file ket noi db	
	$DS_HoaDon_rowsdata = DP::run_query("SELECT * FROM HOADON WHERE TrangThai=1",[],2); 
?>