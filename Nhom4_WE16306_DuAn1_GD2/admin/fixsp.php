<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../assets/fonts/fontawesome-free-5.15.4-web/css/all.min.css">
    <style>
        *{
            margin:0;
            padding: 0;
        }
        .body{
            position: absolute;
            width: 100%;
            height: 100%;
            background-image: url('../web_1/picture/4.jpg');
            background-size: 100% 100%;
        }
        .table{
            width: 500px;
            height: 700px;
            background-color: white;
            margin: auto;
            position: relative;
            /* z-index: 1; */
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
            margin: 0px 100px;
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
            margin: 25px 0px 0px 50px;
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
        <a href="quanlysp.php">
        <i class="fas fa-angle-left"></i>  
        <img class="logo" width="120" src="./../assets/img/logo-order.5f3ca2a0.png" alt="">
      </a>
        </div>
        <div class="table">
            <h2>Sửa Sản Phẩm</h2>
            <?php 
                include '../web_1/db.php';
                if(isset($_GET['ma'])){
                    $ma=$_GET['ma'];
                    $sqlg="select * from sanpham where id_sp='$ma'";
                    $kqg=$con->query($sqlg)->fetch();
                }
            ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <div>
                    Danh mục: <br>
                    <select name="dm" id="">
                        <?php
                            include '../web_1/db.php';
                            $sqldm="select * from danhmucsp";
                            $kqdm=$con->query($sqldm);
                            foreach($kqdm as $key => $dm){
                                ?>
                                    <option value="<?php echo $dm['id_dm'] ?>"><?php echo $dm['ten_dm'] ?></option> 
                                <?php
                            }
                        ?>
                        
                    </select>
                </div>
                <div>
                    Tên sản phẩm: <br>
                    <input name="ten" type="text" value="<?php echo $kqg['tensp'] ?>">
                </div>
                <img width="100" src="../web_1/picture/<?php echo $kqg['anhdd'] ?>" alt="">
                <div>
                    Ảnh sản phẩm: <br>
                    <input name="anh" class="anh" type="file">
                </div>
                <div>
                    Giá sản phẩm: <br>
                    <input name="gia" type="text" value="<?php echo $kqg['giasp'] ?>">
                </div>
                <div>
                    Thông tin sản phẩm: <br>
                    <input name="tt" type="text" value="<?php echo $kqg['ttsp'] ?>">
                </div>
                <button name="btn">Sửa</button>
            </form>
            <?php
                if(isset($_POST['btn'])){
                    $ten=$_POST['ten'];
                    $gia=$_POST['gia'];
                    $tt=$_POST['tt'];
                    $dm=$_POST['dm'];
                    if($_FILES['anh']['name']==""){ 
                        $sqls="update sanpham set tensp='$ten', giasp='$gia', ttsp='$tt', id_dm='$dm' where id_sp='$ma'";
                        $kqs=$con->prepare($sqls);
                        if($kqs->execute()){
                            ?>
                                <script>
                                    window.location.href="quanlysp.php";
                                </script>
                            <?php
                            
                            
                        }else{
                        }
                    }else{
                        $anhdd=$_FILES['anh']['name'];
                        $duong=$_FILES['anh']['tmp_name'];
                        move_uploaded_file($duong,'../web_1/picture'.$anhdd);
                        if ($_FILES['anh']['size']>=2000000) {
                            echo 'Anh qua lon';
                        }else if($_FILES['anh']['type']=="image/jpeg" || $_FILES['anh']['type']=="image/png"){
                            if ($gia<=0) {
                                echo 'Gia san pham phai duong';
                            }else {
                                $sqls="update sanpham set tensp='$ten', anhdd='$anhdd', giasp='$gia', ttsp='$tt', id_dm='$dm' where id_sp='$ma'";
                            $kqs=$con->prepare($sqls);
                            if($kqs->execute()){
                                ?>
                                <script>
                                    window.location.href="quanlysp.php";
                                </script>
                            <?php
                            }else {
                                    echo "Không thêm được";
                            }
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