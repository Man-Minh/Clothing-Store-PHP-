<?php
	include $level.db_path.'db.php';
	$DS_TaiKhoan_rowsdata = DP::run_query("SELECT * FROM TaiKhoan WHERE TrangThai=1 ORDER BY IDKHACHHANG",[],2); 
?>