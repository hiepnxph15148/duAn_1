<?php
    include '../web_1/db.php';
    if(isset($_GET['maxoa'])){
        $maxoa=$_GET['maxoa'];
        $sqlx="delete from danhmucsp where id_dm='$maxoa'";
        $kq=$con->prepare($sqlx);
        if($kq->execute()){
            header("Location:quanlydm.php");
        }else {
            echo "Không xóa được";
        }
    }
?>