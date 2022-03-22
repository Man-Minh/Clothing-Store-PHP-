<?php
  include $level."db/db.php";
  $idSanPham= $_GET['id'];
  $SQL_SP= "select * from sanpham where masp=:idSanPham";
  $chiTietSP= $db-> prepare($SQL_SP);
  $chiTietSP-> bindValue(':idSanPham', $idSanPham, PDO::PARAM_INT);
  $chiTietSP-> execute();
  $chiTietSP_row= $chiTietSP-> fetchALL();
  
  //var_dump($chiTietSP_row);
 ?> 