<?php
 include($level.'db/db.php');
 $stringSQL="select * from sanpham where loaisp='Giầy' AND TRANGTHAI=1";
 $result=$db->prepare($stringSQL);
 $result->execute();
 $dsGiay=$result->fetchALL();
 //var_dump($dsSanPham);
?>