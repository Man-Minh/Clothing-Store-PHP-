<?php
 include('db/db.php');
 $stringSQL="select * from sanpham";
 $result=$db->prepare($stringSQL);
 $result->execute();
 $dsSanPham=$result->fetchALL();
 //var_dump($result);
 //var_dump($dsSanPham);
?>