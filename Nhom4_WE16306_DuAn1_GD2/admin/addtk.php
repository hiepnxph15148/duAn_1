<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            width: 600px;
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
            margin: 0px 120px;
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
    </style>
</head>
<body>
    <div class="body">
        <div class="table">
            <h2>Thêm</h2>
            <form action="" method="post">
                <div>
                    User: <br>
                    <input name="ten" type="text">
                </div>
                <div>
                    Pass: <br>
                    <input name="pass" type="text">
                </div>
                <div>
                    Email: <br>
                    <input name="email" type="text">
                </div>
                <div>
                    Vocher: <br>
                    <input name="vc" type="text">
                </div>
                <div>
                    Quyền: <br>
                    <input name="quyen" type="text">
                </div>
                <button name="btn">Thêm</button>
            </form>
            <?php
                include '../web_1/db.php';
                if(isset($_POST['btn'])){
                    $ten=$_POST['ten'];
                    $pass=$_POST['pass'];
                    $email=$_POST['email'];
                    $vc=$_POST['vc'];
                    $quyen=$_POST['quyen'];
                    $sql="insert into tk values(null, '$ten', '$pass', '$email', '$vc', '$quyen')";
                    $kq=$con->exec($sql);
                    if($kq==1){
                        header("Location:quanlytk.php");
                    }else{
                        echo 'lỗi';
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>