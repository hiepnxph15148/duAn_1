<?php
    include '../web_1/db.php';
    if(isset($_GET['maxoa'])){
        $maxoa=$_GET['maxoa'];
        $sqlx="delete from sanpham where id_sp='$maxoa'";
        $kq=$con->prepare($sqlx);
        if($kq->execute()){
            header("Location:quanlysp.php");
        }else {
            echo "Không xóa được";
        }
    }
?>