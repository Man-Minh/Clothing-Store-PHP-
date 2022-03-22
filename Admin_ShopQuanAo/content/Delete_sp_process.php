<?php
	//1 Khoi Tao
	$level="../";
	include $level.'config.php';
	include $level.db_path.'db.php';
	$maSanPham =  $_GET['masp'];
	
	
	move_uploaded_file($_FILES["HinhAnhSp"]["tmp_name"],
	$level."images/".$_FILES["HinhAnhSp"]["name"]);
	//2 Cau truy van
	$KetQua_themsp = DP::run_query("UPDATE sanpham set TrangThai =0
									WHERE MaSp =?",[$maSanPham],1);
    if($KetQua_themsp == true)
	{
		echo '<script>alert("Them san pham thanh cong !");</script>';
	}
	else
	{
		echo '<script>alert("Them san pham khong thanh cong !");</script>';
	}
	//3 Xu ly anh 
	
	header('location:../pages/SanPham.php');
	
?>