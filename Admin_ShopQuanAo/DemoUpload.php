<?php
echo	$Tensp = $_POST["TenSp"];
echo	$Ma = $_POST["MaSp"];
echo	$Loaisp = $_POST["LoaiSp"];
echo	$SoLuong = $_POST["SoLuong"];
echo	$Gia = $_POST["Gia"];
	move_uploaded_file($_FILES["Avatar"]["tmp_name"],"upload/".$_FILES["Avatar"]["name"]);
echo	$Hinh = "upload/".$_FILES["Avatar"]["name"];
	
?>