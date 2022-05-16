<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <script>
        var gia=document.getElementsByClassName("gia");
        var sl=document.getElementsByClassName("sl");
        var tt=document.getElementsByClassName("tt");
        function thanhtien(i){
            tt[i].innerHTML=gia[i].value*sl[i].value
            // tinhtien()
        }
        window.onload=function(){
            for(i=0;i<gia.length;i++){
                tt[i].innerHTML=gia[i].value*sl[i].value;
            }
        }
    </script>
    <style>
        /* section{
        
        } */
        *{
            margin:0;
            padding: 0;
        }
        ul{
            margin-top: 50px;
        }
        ul li{
            margin: 35px 30px;
            list-style: none;
        }
        ul li a{
            text-decoration: none;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
        .menu{
            background-color: tomato;
            position: fixed;
            height: 100%;
            float: left;
            width: 17%;
        }
        .table h2{
            margin:50px 10px;
            font-size:30px;
            color:tomato;
        }
        .table{
            background-color: rgb(248, 248, 248);
            width: 83%;
            margin: 0px 0px;
            float: right;
        }
        table{
            margin:50px 10px;
        }
        button{
           
            padding: 5px 15px;
            background-color: rgb(95, 95, 196);
            border:none;
        }
        .add{
            margin: 0px 0px 30px 50px;
            padding: 5px 15px;
            background-color: rgb(95, 95, 196);
            border:none;
        }
        .add a{
            font-size:20px;
            font-weight:bold;
        }
        button a{
            text-decoration: none;
            
            color: white;
        }
        img{
            margin:20px 30px;
        }
        h2{
            margin:20px 0px ;
        }
        .daubai td{
            font-weight:bold;
            text-align:center;
            font-family: Arial, Helvetica, sans-serif;
        }
        /* .table_body{
            display: grid;
            grid-template-columns: 70% 3% 27%;
        } */
        .ngan{
            width: 100%;
            height: 3px;
            background-color: gray;
            margin:20px 0px;
        }
        .fab{
            font-size: 30px;
        }
        .fas{
            font-size: 30px;
        }
        .id{
            font-weight:bold;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <section>
        <div class="menu">
        <img width="150" src="../web_1/picture/footer_logo1.png" alt="">
            <ul>
            <li><a href="../index.php"><i class="fas fa-home"></i> - Trang chủ</a></li>
                <li><a href="quanlysp.php"><i class="fab fa-product-hunt"></i> - Quản Lý Sản Phẩm</a></li>
                <li><a href="quanlydm.php"><i class="fas fa-certificate"></i> - Quản Lý Danh mục</a></li>
                <li><a href="quanlytk.php"><i class="fas fa-user-circle"></i> - Quản Lý Tài Khoản</a></li>
                <li><a href="quanlybv.php"><i class="fas fa-blog"></i> - Quản Lý Bài Viết</a></li>
                <li><a href="quanlydh.php"><i class="fab fa-jedi-order"></i> - Quản Lý Đơn Hàng</a></li>
            </ul>
        </div>

        <div class="table">
        <h2>Quản Lý Bài Viết</h2>
            <table>
                <tr class="daubai">
                    <td>ID</td>
                    <td>Tên</td>
                    <td>Ảnh</td>
                    <td>Tin Vắn Tắt</td>
                    <td>Tin chi tiết</td>
                    <td>Sửa</td>
                    <td>Xóa</td>
                </tr>
                <tr>
                    <td colspan="7"><div class="ngan"></div></td>
                </tr>
                <?php
                    include '../web_1/db.php';
                    $sql="select * from baiviet";
                    $kq=$con->query($sql);
                    foreach($kq as $key => $value){
                        ?>
                         <tr>
                            <td class="id"><?php echo $value['id_bv'] ?></td>
                            <td><?php echo $value['tenbv'] ?></td>
                            <td><img width=100 src="./../assets/img/<?php echo $value['anhbv'] ?>" alt=""></td>
                            <td><?php echo $value['tinvt'] ?></td>
                            <td><?php echo $value['tinct'] ?></td>
                            <td><button><a href="fixbv.php?ma=<?php echo $value['id_bv'] ?>">Sửa</a></button></td>
                            <td><button><a href="deletebv.php?maxoa=<?php echo $value['id_bv']?>" onclick="return Del('<?php echo $value['tenbv'] ?>')">Xóa</a></button></td>
                        </tr>
                        <tr>
                            <td colspan="7"><hr></td>
                        </tr>

                        <?php
                    }
                ?>


            </table>
            <button class="add"><a href="addbv.php">Thêm Bài Viết</a></button>
                </div>
    </section>
    
    <script>
        function Del(name){
            return confirm("Ban co thuc su muon xoa: " + name + "?");
        }
    </script>
</body>
</html>