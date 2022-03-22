<?php
 include('db/db.php');
 $stringSQL="select tensp, dongia, sell, img from sanpham";
 $result=$db->prepare($stringSQL);
 $result->execute();
 $rowdata=$result->fetchALL();
 //var_dump($result);
 //var_dump($rowdata);
?>