<?php
	//1 Khoi Tao
	$level="../";
	include $level.'config.php';
	include $level.db_path.'db.php';
	$tenDangNhap = $_GET['tk'];
	$matKhau = $_POST['txtMK'];
	$idChuTaiKhoan = $_POST['txtIDTaiKhoan'];
	$loaiTk = $_POST['txtLoaiTk'];
	
	//2 Cau truy van
	$KetQua_tk = DP::run_query("UPDATE taikhoan SET  TrangThai= 0 
									WHERE TenDangNhap=?",[$tenDangNhap],1);
    if($KetQua_tk == true)
	{
		echo '<script>alert("Them san pham thanh cong !");</script>';
	}
	else
	{
		echo '<script>alert("Them san pham khong thanh cong !");</script>';
	}
	//3 Xu ly anh 
	
	header('location:../pages/TaiKhoan.php');
	
?>