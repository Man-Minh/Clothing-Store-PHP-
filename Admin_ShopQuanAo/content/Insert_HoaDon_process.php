<?php
	//1 Khoi Tao
	$level="../";
	include $level.'config.php';
	include $level.db_path.'db.php';
	
	$maHD = $_POST['txtMaHD'];
	$ngaylapHD = $_POST['txtNgayLapDon'];
	$IDKhachHang = $_POST['txtIDKhachHang'];		
	$maSP = $_POST['txtMaSP'];
	$soLuong = $_POST['txtSoLuong'];	
	
	
	//2 Lay ten san pham theo ma san pham 
	$TenSanPham = DP::run_query("SELECT TenSp FROM sanpham WHERE MaSp = '?' ",[$maSP],2);
	$DonGiaSanPham = DP::run_query("SELECT DonGia FROM sanpham WHERE MaSp = '?' ",[$maSP],2);
	//2 Kiem tra so luong san pham
	$SoLuongSanPham = DP::run_query("SELECT SoLuong FROM sanpham WHERE TenSp LIKE '?' ",[$TenSanPham],2);
	$ThanhTien = $soLuong*$DonGiaSanPham;
	if($soLuong < $SoLuongSanPham)
	{
	
	//4 Them HoaDon
	$KetQua_them = DP::run_query("INSERT INTO hoadon(MaHD, NgayLapHD, IDKhachHang, ThanhTien)
									VALUES(?,?,?,?)",[$maHD,$ngaylapHD,$IDKhachHang,$ThanhTien],1);
	//5 Them ct_hoadon								
	$KetQua_CtHoaDon_them = DP::run_query("INSERT INTO ct_hoadon(MaHD, MaSp, SoLuong, DonGia, TenSp)
									VALUES(?,?,?,?,?)",[$maHD,$maSP,$soLuong,$DonGiaSanPham,$TenSanPham],1);
	}
    if($KetQua_them == true)
	{
		echo '<script>alert("Them san pham thanh cong !");</script>';
	}
	else
	{
		echo '<script>alert("Them san pham khong thanh cong !");</script>';
	}
	//3 Xu ly anh 
	
	//header('location:../'.pages_path.'QLDonHang.php');
	
?>