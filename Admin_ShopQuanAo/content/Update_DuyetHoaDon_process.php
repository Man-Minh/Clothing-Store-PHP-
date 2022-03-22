<?php
	//1 Khoi Tao
	$level="../";
	include $level.'config.php';
	include $level.db_path.'db.php';
	
	$maHoaDon = /*$_POST['txtMaSp'];*/ $_GET['mahd'];
	
	//2 Cau truy van
	$KetQua_DuyetDon = DP::run_query("UPDATE hoadon set TrangThaiDon =1 WHERE MaHD = ?"
									,[$maHoaDon],1);
    if($KetQua_DuyetDon == true)
	{
		echo '<script>alert("Them san pham thanh cong !");</script>';
	}
	else
	{
		echo '<script>alert("Them san pham khong thanh cong !");</script>';
	}
	//3 Xu ly anh 
	
	header('location:../pages/DuyetDon.php');
	
?>