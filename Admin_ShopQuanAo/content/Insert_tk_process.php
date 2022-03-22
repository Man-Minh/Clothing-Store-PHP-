<?php
	//1 Khoi Tao
	$level="../";
	include $level.'config.php';
	include $level.db_path.'db.php';
	$tenDangNhap = $_POST['txtTenTK'];
	$matKhau = $_POST['txtMK'];
	$idChuTaiKhoan = $_POST['txtIDTaiKhoan'];
	$loaiTk = $_POST['txtLoaiTk'];
	
	//2 Cau truy van
	$KetQua_tk = DP::run_query("INSERT INTO taikhoan(TenDangNhap, MatKhau, IDKhachHang, LoaiTk)
									VALUES(?,?,?,?)",[$tenDangNhap,$matKhau,$idChuTaiKhoan,$loaiTk],1);
    if($KetQua_Tk == true)
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