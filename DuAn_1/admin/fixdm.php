<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../assets/fonts/fontawesome-free-5.15.4-web/css/all.min.css">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin:0;
        }
        .body{
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: red;
            background-image: url('../web_1/picture/3.jpg');
            background-size: 100% 100%;
        }
        .table{
            width: 400px;
            height: 380px;
            background-color: white;
            margin: auto;
            position: relative;
            z-index: 1;
            border-radius: 5px;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }
        h2{
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 900;
        }
        form{
            margin: 0px 50px;
        }
        input{
            width: 300px;
            padding: 10px 0px;
            border-radius: 5px;
            border: 2px solid tomato;
        }.anh{
            border: none;
        }
        div{
            margin: 30px 0px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
        }
        button{
            padding: 10px 60px;
            border: none;
            background-color: tomato;
            color: white;
            font-size: 18px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 500;
            border-radius: 10px;
        }
        .back{
            position: fixed;
            width: 170px;
            height:50px;
            position: relative;
            background-color:white;
            border-radius:5px;
            margin: 100px 0px 0px 50px;
        }
        i{
            float: left;
            font-size:50px;
        }
        .logo{
            float: left;
            margin:6px 0px 0px 10px;
        }
    </style>
</head>
<body>
    <div class="body">
    <div class="back">
        <a href="quanlydm.php">
        <i class="fas fa-angle-left"></i>  
        <img class="logo" width="120" src="./../assets/img/logo-order.5f3ca2a0.png" alt="">
      </a>
        </div>
        <?php
            include '../web_1/db.php';
            if(isset($_GET['ma'])){
                $ma=$_GET['ma'];
                $sqls="select * from danhmucsp where id_dm='$ma'";
                $kqs=$con->query($sqls)->fetch();
            }
        ?>
        <div class="table">
            <h2>Sửa danh mục</h2>
            <form action="" method="post" enctype="multipart/form-data">
                <div>
                    Tên danh mục: <br>
                    <input name="ten" type="text" value="<?php echo $kqs['ten_dm'] ?>">
                </div>
                <div>
                    Ảnh danh muc: <br>
                    <img width="70" src="../web_1/picture/<?php echo $kqs['anhdm'] ?>" alt="">
                    <input class="anh" name="anh" type="file">
                </div>
                <button name="btn">Sửa</button>
            </form>
            <?php
                if(isset($_POST['btn'])){
                    $ten=$_POST['ten'];

                    if($_FILES['anh']['name']==""){
                        $sql="update danhmucsp set ten_dm='$ten' where id_dm='$ma'";
                        $kq=$con->prepare($sql);
                        if($kq->execute()){
                            header("Location:quanlydm.php");
                        }
                    }else {
                        $anhdm=$_FILES['anh']['name'];
                        $duong=$_FILES['anh']['tmp_name'];
                        move_uploaded_file($duong,'../web_1/picture'.$anhdm);

                        if ($_FILES['anh']['size']>=2000000) {
                            echo 'Anh qua lon';
                        }else if($_FILES['anh']['type']=="image/jpeg" || $_FILES['anh']['type']=="image/png"){
                            
                                $sqlsp="update danhmucsp set ten_dm='$ten', anhdm='$anhdm' where id_dm='$ma'";
                                $kqsp=$con->exec($sqlsp);
                                if($kqsp==1){
                                header("Location:quanlydm.php");
                                }else {
                                echo "Không Sửa được được";
                        
                            }
                        }else {
                            echo 'Khong phai Files Image';
                        }
                    }
                 }
                    
                ?>
        </div>
    </div>
</body>
</html>