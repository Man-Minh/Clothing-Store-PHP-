<?php
 include($level.'db/db.php');
 $stringSQL="select * from sanpham where (loaisp='ÁoNữ' or loaisp='QuầnNữ' or loaisp='PhụKiệnNữ') AND TRANGTHAI=1";
 $result=$db->prepare($stringSQL);
 $result->execute();
 $dsSanPham=$result->fetchALL();
 //var_dump($dsSanPham);
?>