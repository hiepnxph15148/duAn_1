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
            width: 500px;
            height: 650px;
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
            color:tomato;
        }
        form{
            margin: 0px 90px;
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
        textarea{
            border: 2px solid tomato;
            border-radius:5px;
        }
    </style>
</head>
<body>
    <div class="body">
    <div class="back">
        <a href="quanlybv.php">
        <i class="fas fa-angle-left"></i>  
        <img class="logo" width="120" src="./../assets/img/logo-order.5f3ca2a0.png" alt="">
      </a>
        </div>
        <?php
            include '../web_1/db.php';
            if(isset($_GET['ma'])){
                $ma=$_GET['ma'];
                $sqls="select * from baiviet where id_bv='$ma'";
                $kqs=$con->query($sqls)->fetch();
            }
        ?>
        <div class="table">
            <h2>Sửa bài viết</h2>
            <form action="" method="post" enctype="multipart/form-data">
                <div>
                    Tên bài viết: <br>
                    <input name="ten" type="text" value="<?php echo $kqs['tenbv'] ?>">
                </div>
                <div>
                    Ảnh bài viết: <br>
                    <img width="70" src="../assets/img/<?php echo $kqs['anhbv'] ?>" alt="">
                    <input name="anh" class="anh" type="file">
                </div>
                <div>
                    Tin vắn tắt: <br>
                    <input name="vt" type="text" value="<?php echo $kqs['tinvt'] ?>" >
                </div>
                <div>
                    Tin chi tiết: <br>
                    <input name="ct" type="text" value="<?php echo $kqs['tinct'] ?>">
                </div>
                <button name="btn">Sửa</button>
            </form>
            <?php
                if(isset($_POST['btn'])){
                    $ten=$_POST['ten'];
                    $vt=$_POST['vt'];
                    $ct=$_POST['ct'];
                    if($_FILES['anh']['name']==""){
                        $sqlss="update baiviet set tenbv='$ten', tinvt='$vt', tinct='$ct'  where id_bv='$ma' ";
                        $kq=$con->prepare($sqlss);
                        if($kq->execute()){
                            ?>
                                <script>
                                    window.location.href="quanlybv.php";
                                </script>
                            <?php
                        }
                    }else {
                        $anhbv=$_FILES['anh']['name'];
                        $duong=$_FILES['anh']['tmp_name'];
                        move_uploaded_file($duong,'../assets/img'.$anhbv);

                        if ($_FILES['anh']['size']>=2000000) {
                            echo 'Anh qua lon';
                        }else if($_FILES['anh']['type']=="image/jpeg" || $_FILES['anh']['type']=="image/png"){      
                                $sql="update baiviet set tenbv='$ten', tinvt='$vt', anhbv='$anhbv', tinct='$ct' where id_bv='$ma'";
                                $kqsp=$con->prepare($sql);
                                if($kqsp->execute()){
                                    ?>
                                    <script>
                                        window.location.href="quanlybv.php";
                                    </script>
                                <?php
                                }else {
                                echo "Không thêm được";
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