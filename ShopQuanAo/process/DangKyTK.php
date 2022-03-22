<?php 
$level= "../";
  include $level.'config.php';
  include $level.db_path.'db_.php';
  $ten= $_GET['Name'];
  $email= $_GET['Email'];
  $sdt= $_GET['phone'];
  $matkhau= $_GET['pass'];
  $diachi= $_GET['home'];
  //
  $themTK= DP::run_query("INSERT INTO taikhoan (TenDangNhap, MatKhau, LoaiTk, TrangThai) 
                         VALUES (?, ?, 'KháchHàng', '1')", [$email,$matkhau], 1);
  $themKhachHang= DP::run_query("INSERT INTO khachhang ( HoTen, SDT, Email, DiaChi, TrangThai)
                                VALUES (?,?,?,?, '1')", [$ten,$sdt,$email,$diachi], 1);
header('location:../index.php');
 ?>