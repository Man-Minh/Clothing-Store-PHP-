<?php
	//1 Khoi Tao
	$level="../";
	include $level.'config.php';
	include $level.db_path.'db.php';
	$tenSanPham = $_POST['txtTenSp'];
	$maSanPham = $_POST['txtMaSp'];
	$loaiSanPham = $_POST['txtLoaiSp'];
	$soLuong = $_POST['txtSoLuong'];
	$gia = $_POST['txtGia'];
	$size = $_POST['txtSize'];
	$hinhAnh = $_FILES['HinhAnhSp']['name'];
	
	move_uploaded_file($_FILES["HinhAnhSp"]["tmp_name"],
	$level."images/".$_FILES["HinhAnhSp"]["name"]);
	//2 Cau truy van
	$KetQua_themsp = DP::run_query("INSERT INTO sanpham(MaSp, TenSp, DonGia, SoLuong, Anh, LoaiSp, Size)
									VALUES(?,?,?,?,?,?,?)",[$maSanPham,$tenSanPham,$gia,$soLuong,'images/'.$hinhAnh,$loaiSanPham,$size],1);
    if($KetQua_themsp == true)
	{
		echo '<script>alert("Them san pham thanh cong !");</script>';
	}
	else
	{
		echo '<script>alert("Them san pham khong thanh cong !");</script>';
	}
	//3 Xu ly anh 
	
	header('location:../'.pages_path.'QuanLySanPham.php');
	
?>