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
            margin:0;
            padding: 0;
        }
        .body{
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: red;
        }
        .table{
            width: 500px;
            height: 600px;
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
            margin: 70px 0px 0px 50px;
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
    <div class="body">
        <div class="back">
        <a href="quanlytk.php">
        <i class="fas fa-angle-left"></i>  
        <img class="logo" width="120" src="./../assets/img/logo-order.5f3ca2a0.png" alt="">
      </a>
        </div>
        <div class="table">
            <h2>Sửa tài khoản</h2>
            <?php
                include '../web_1/db.php';
                if(isset($_GET['ma'])){
                    $ma=$_GET['ma'];
                    $sqlh="select * from tk where id_tk='$ma'";
                    $kqh=$con->query($sqlh)->fetch();
                }
            ?>
            <form action="" method="post">
                <div>
                    User: <br>
                    <input name="ten" type="text" value="<?php echo $kqh['user'] ?>">
                </div>
                <div>
                    Pass: <br>
                    <input name="pass" type="text" value="<?php echo $kqh['pass'] ?>">
                </div>
                <div>
                    Email: <br>
                    <input name="email" type="text" value="<?php echo $kqh['email'] ?>">
                </div>
                <div>
                    Vocher: <br>
                    <input name="vc" type="text" value="<?php echo $kqh['vocher'] ?>">
                </div>
                <div>
                    Quyền: <br>
                    <input name="quyen" type="text" value="<?php echo $kqh['quyen'] ?>">
                </div>
                <button name="btn">Sửa</button>
            </form>
            <!-- <?php
                
                if(isset($_POST['btn'])){
                    $ten=$_POST['ten'];
                    $pass=$_POST['pass'];
                    $email=$_POST['email'];
                    $vc=$_POST['vc'];
                    $quyen=$_POST['quyen'];
                    $sql="update tk set user='$ten', pass='$pass', email='$email', vocher='$vc', quyen='$quyen' where id_tk='$ma'";
                    $kq=$con->prepare($sql);
                    if($kq->execute()){
                        header("Location:quanlytk.php");
                    }else{
                        echo 'lỗi';
                    }
                }
            ?> -->
        </div>
    </div>
</body>
</html>