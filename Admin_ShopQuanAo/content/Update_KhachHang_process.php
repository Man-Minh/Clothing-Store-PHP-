<?php
	//1 Khoi Tao
	$level="../";
	include $level.'config.php';
	include $level.db_path.'db.php';
	$idKhachHang = $_POST['txtID'];
	$hoTen = $_POST['txtHoTen'];
	$sdt = $_POST['txtSDT'];
	$email = $_POST['txtEMAIL'];
	$anhDaiDien = $_FILES['AvatarKh']['name'];
	$ngaySinh = $_POST['txtNgaySinh'];
	$gioiTinh = $_POST['txtGioiTinh'];
	$diaChi = $_POST['txtDiaChi'];
	
	move_uploaded_file($_FILES["AvatarKh"]["tmp_name"],
	$level."Avatar/".$_FILES["AvatarKh"]["name"]);
	//2 Cau truy van
	$KetQua_KH = DP::run_query("UPDATE khachhang SET HoTen=?, SDT=?, Email=?, AnhDaiDien=?,NgaySinh=?, GioiTinh=?, DiaChi=?  WHERE IDKhachHang =?"
														,[$hoTen,$sdt,$email,'Avatar/'.$anhDaiDien,$$ngaySinh,$gioiTinh,$diaChi,$idKhachHang],1);
  
	//3 Xu ly anh 
	
	header('location:../pages/KhachHang.php');
	
?>