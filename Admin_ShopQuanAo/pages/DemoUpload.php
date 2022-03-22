<?php

if(isset ($_POST["TenSp"]) && ($_POST["MaSp"]) && ($_POST["SoLuong"]) )
{
echo	$Tensp = $_POST["TenSp"]."</br>";
echo	$Masp = $_POST["MaSp"]."</br>";
echo	$Loaisp = $_POST["LoaiSp"]."</br>";
echo	$SoLuong = $_POST["SoLuong"]."</br>";
echo	$Gia = $_POST["Gia"]."</br>";
	move_uploaded_file($_FILES["Avatar"]["tmp_name"],"upload/".$_FILES["Avatar"]["name"]);
echo	$Hinh = "upload/".$_FILES["Avatar"]["name"];

}
?>
<img src=" <?php echo $Hinh ?> " width="100" alt="Không load được ảnh, vui lòng thử
lại sau" title="Logo trang web" />