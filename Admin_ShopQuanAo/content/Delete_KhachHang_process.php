<?php
	//1 Khoi Tao
	$level="../";
	include $level.'config.php';
	include $level.db_path.'db.php';
	$idKhachHang = $_GET['IDKhachHang'];	
	
	
	move_uploaded_file($_FILES["AvatarKh"]["tmp_name"],
	$level."Avatar/".$_FILES["AvatarKh"]["name"]);
	//2 Cau truy van
	$KetQua_KH = DP::run_query("UPDATE khachhang SET TrangThai = 0 WHERE IDKhachHang =?"
														,[$idKhachHang],1);
   
	
	//3 Xu ly anh 
	
	header('location:../pages/KhachHang.php');
	
?>