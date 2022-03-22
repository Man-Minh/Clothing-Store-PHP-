<?php
  include $level."db/db.php";
  $SanPham= $_GET["search"];
  $SQL_SP= "select * from sanpham where  trangthai=1 and tenSP like '%".$SanPham."%'";
  $chiTietSP= $db-> prepare($SQL_SP);
  $chiTietSP-> execute();
  $chiTietSP_row= $chiTietSP-> fetchALL();
  //var_dump($chiTietSP_row);
 ?>