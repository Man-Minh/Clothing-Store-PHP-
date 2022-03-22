<?php
	//1 Khoi Tao
	$level="../";
	include $level.'config.php';
	include $level.db_path.'db.php';
	
	$maHoaDon = /*$_POST['txtMaSp'];*/ $_POST['txtMaHD'];
	$soLuong = $_POST['txtSoLuong'];
	
	//2 Cau truy van
	$KetQua_UpdateCT_HoaDon = DP::run_query("UPDATE ct_hoadon SET SoLuong = ? WHERE MaHD = ?"
									,[$soLuong,$maHoaDon],1);
						
    if($KetQua_UpdateCT_HoaDon == true)
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