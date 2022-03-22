<?php
	//1 Khoi Tao
	$level="../";
	include $level.'config.php';
	include $level.db_path.'db.php';
	$hoTen = $_POST['txtHoTen'];
	$sdt = $_POST['txtSDT'];
	$email = $_POST['txtEMAIL'];
	$anhDaiDien = $_FILES['AvatarKh']['name'];
	$ngaySinh = $_POST['txtNgaySinh'];
	$gioiTinh = $_POST['txtGioiTinh'];
	$diaChi = $_POST['txtDiaChi'];
	//2 Cau truy van
	$KetQua_KH = DP::run_query("INSERT INTO khachhang(HoTen, SDT, Email, AnhDaiDien, NgaySinh, GioiTinh, DiaChi)
											VALUES(?,?,?,?,?,?,?)",[$hoTen,$sdt,$email,'Avatar/'.$anhDaiDien,$ngaySinh,$gioiTinh,$diaChi],1);
  
	//3 Xu ly anh 
	
	header('location:../index.php');
	
?>