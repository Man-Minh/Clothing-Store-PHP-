<?php
 include($level.'db/db.php');
 $stringSQL="select * from sanpham where (loaisp='ÁoNam' or loaisp='QuầnNam' or loaisp='PhụKiệnNam') AND TRANGTHAI=1";
 $result=$db->prepare($stringSQL);
 $result->execute();
 $dsSanPham=$result->fetchALL();
 //var_dump($result);
 //var_dump($dsSanPham);
?>