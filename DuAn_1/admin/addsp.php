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
    height: 700px;
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
                    <input name="ten" type="text">
                </div>
                <div>
                    Ảnh sản phẩm: <br>
                    <input name="anh" class="anh" type="file">
                </div>
                <div>
                    Giá sản phẩm: <br>
                    <input name="gia" type="text">
                </div>
                <div>
                    Thông tin sản phẩm: <br>
                    <input name="tt" type="text">
                </div>
                <button name="btn">Thêm</button>
            </form>
            <?php
                if(isset($_POST['btn'])){
                    $ten=$_POST['ten'];

                    $anhdd=$_FILES['anh']['name'];
                    $duong=$_FILES['anh']['tmp_name'];
                    move_uploaded_file($duong,'../web_1/picture'.$anhdd);

                    $gia=$_POST['gia'];
                    $tt=$_POST['tt'];
                    $dm=$_POST['dm'];
                    if ($_FILES['anh']['size']>=2000000) {
                        echo 'Anh qua lon';
                    }else if($_FILES['anh']['type']=="image/jpeg" || $_FILES['anh']['type']=="image/png"){
                        if ($gia<=0) {
                            echo 'Gia san pham phai duong';
                        }else {
                            $sql="insert into sanpham values(null,'$ten', '$anhdd','$gia','$tt','$dm')";
                            $kqsp=$con->exec($sql);
                            if($kqsp==1){
                            header("Location:quanlysp.php");
                            }else {
                            echo "Không thêm được";
                     }
                        }
                    }else {
                        echo 'Khong phai Files Image';
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>