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
            padding: 0;
            margin:0;
        }
        ul{
            margin-top: 50px;
        }
        ul li{
            margin: 35px 30px;
            list-style: none;
            font-weight:bold;
            font-size:15px;
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
        .table{
            background-color: rgb(248, 248, 248);
            width: 83%;
            margin: 0px 0px;
            float: right;
            height: 100%;
        }
        .table h2{
            margin:50px 100px;
            font-size:30px;
            color:tomato;
        }
        table{
            margin:0px 100px
        }
        button{
            padding: 5px 15px;
            background-color: rgb(95, 95, 196);
            border:none;
        }
        button a{
            text-decoration: none;
            
            color: white;
        }
        .add{
            margin: 0px 0px 30px 100px;
            padding: 10px 25px;
            background-color: rgb(95, 95, 196);
            border:none;
        }
        /* .add a{
            font-size:20px;
            font-weight:bold;
        } */
        h2{
            margin:20px 0px ;
        }
        /* .table_body{
            display: grid;
            grid-template-columns: 70% 3% 27%;
        } */
        .ngan{
            width: 100%;
            height: 3px;
            background-color: gray;
        }.daubai td{
            font-weight:bold;
            
        }
        td{
            font-family: Arial, Helvetica, sans-serif;
            text-align:center;
            padding:10px 0px;
        }
        img{
            margin:20px 30px;
        }
        .fab{
            font-size: 30px;
        }
        .fas{
            font-size: 30px;
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
            <h2>Quản Lý Sản Phẩm</h2>
            <button class="add"><a href="quanlydh.php">Đơn hàng Thành Viên</a></button>
            <div class="table_body">
                <div class="table_sp">
                    <table method="POST">
                        <tr class="cha">
                            <td class="tenpd">ID</td>
                            <td style="width: 200px;">Tên Khách</td>
                            <td style="width: 300px;">Địa chỉ</td>
                            <td style="width: 150px;">Số Điện Thoại</td>
                            <td style="width: 100px;">Ngày</td>
                            <td style="width: 130px;">Tình trạng</td>
                        </tr>
                        <td colspan="7"><div class="ngan"></div></td>
                        <?php
                    include '../web_1/db.php';
                    $sql="SELECT * FROM `don_hang_thuong` ORDER BY id_dht DESC";
                    $kq=$con->query($sql);
                    foreach($kq as $key => $value){
                        ?>
                         <tr>
                            <td><?php echo $value['id_dht'] ?></td>
                            <td><?php echo $value['tenkhach'] ?></td>
                            <td><?php echo $value['diachi'] ?></td>
                            <td>0<?php echo $value['sdt'] ?></td>
                            <td><?php echo $value['ngaynhan'] ?></td>
                            <td><?php 
                                if($value['tinhtrang']==1){
                                    echo 'Đã xác nhận';
                                }else if($value['tinhtrang']==2){
                                    echo 'Đang giao';
                                }else if($value['tinhtrang']==3){
                                    echo 'Đã nhận';
                                }else if($value['tinhtrang']==4){
                                    echo 'Hủy';
                                }else{
                                    echo 'Chờ xác nhận';
                                }
                            ?></td>
                            <td><button><a href="chitietdht.php?idd=<?php echo $value['id_dht'] ?>">Chi tiết đơn hàng</a></button></td>
                        </tr>
                        <tr>
                            <td colspan="7"><hr></td>
                        </tr>

                        <?php
                    }
                ?>
                    </table>
                </div>
    </section>
    
</body>
</html>