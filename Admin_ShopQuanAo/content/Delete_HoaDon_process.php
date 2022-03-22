<?php
	//1 Khoi Tao
	$level="../";
	include $level.'config.php';
	include $level.db_path.'db.php';
	
	$maHoaDon = /*$_POST['txtMaSp'];*/ $_GET['mahd'];
	
	//2 Cau truy van
	$KetQua_XoaDon = DP::run_query("UPDATE hoadon set TrangThai =0 WHERE MaHD = ?"
									,[$maHoaDon],1);
    if($KetQua_XoaDon == true)
	{
		echo '<script>alert("Them san pham thanh cong !");</script>';
	}
	else
	{
		echo '<script>alert("Them san pham khong thanh cong !");</script>';
	}
	//3 Xu ly anh 
	
	header('location:../index.php');
	
?>