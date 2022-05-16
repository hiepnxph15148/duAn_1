<?php
    include '../web_1/db.php';
    if(isset($_GET['maxoa'])){
        $maxoa=$_GET['maxoa'];
        $sqlx="delete from baiviet where id_bv='$maxoa'";
        $kq=$con->prepare($sqlx);
        if($kq->execute()){
            header("Location:quanlybv.php");
        }else {
            echo "Không xóa được";
        }
    }
?>