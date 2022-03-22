<?php
	include $level.db_path.'db.php'; // include den file ket noi db	
	$DS_TrangThaiHoaDon_rowsdata = DP::run_query("SELECT * FROM HOADON WHERE TrangThai=1 and TrangThaiDon =0",[],2); 
?>