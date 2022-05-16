<?php
    try {
        $con=new PDO("mysql:host=localhost;
        dbname=pizza;charset=utf8","root","");
    } catch (PDOException $e) {
        echo "Lỗi kết nối";
    }
?>