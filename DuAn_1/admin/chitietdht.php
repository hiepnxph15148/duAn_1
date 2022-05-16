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
            margin-top: 30px;
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
            background-color: rgb(95, 95, 196);
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
        }
        button{
            margin: 0px 0px 30px 50px;
            padding: 5px 15px;
            background-color: rgb(95, 95, 196);
            border:none;
            color: white;
        }
        button a{
            text-decoration: none;
            
            color: white;
        }
        h2{
            margin:20px 0px ;
        }
        .table_body{
            display: grid;
            grid-template-columns: 70% 3% 27%;
        }
        .table_sp{
            margin-left:50px;
        }
        .ngan{
            width: 100%;
            height: 3px;
            margin:10px 0px;
            background-color: gray;
        }
        .nganvip{
            width: 3px;
            height: 300px;
            margin:0px 0px;
            background-color: gray;
        }
        input{
            width: 100px;
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
            <button><a href="quanlydht.php">Đơn hàng Vãn Lai</a></button>
            <div class="table_body">
                <div class="table_sp">
                    <table method="POST">
                        <tr class="cha">
                            <td class="tenpd">Product</td>
                            <td style="width: 150px;"></td>
                            <td style="width: 160px;">Price</td>
                            <td style="width: 100px;">Quantiny</td>
                            <td style="width: 120px;">Total</td>
                            <td>Ngày nhận</td>
                        </tr>
                        <td colspan="6"><div class="ngan"></div></td>
                        <?php
                            include '../web_1/db.php';
                            if (isset($_GET['idd'])) {
                                $idd=$_GET['idd'];
                                $sql="SELECT * FROM `don_hang_thuong` AS dht, sanpham as sp, size as sz WHERE dht.id_s=sz.id_s AND dht.id_sp=sp.id_sp AND dht.id_dht='$idd'";
                                $kq=$con->query($sql)->fetch();
                            }
                        ?>
                        <tr>
                            <td><?php echo $kq['tensp'] ?></td>
                            <td><img width="50" src="../web_1/picture/<?php echo $kq['anhdd'] ?>" alt=""></td>
                            <td><?php
                                if ($kq['id_dm']==1) {
                                   echo "Size :"; echo $kq['ten_size']?>--<?php echo number_format($kq['gia_tien'],0,',','.'); echo " VND";
                                    ?>
                                            <input type="hidden" class="gia" value="<?php echo $kq['gia_tien'] ?>"> 
                                    <?php
                                }else{
                                    echo number_format($kq['giasp'],0,',','.'); echo ' VND';
                                    ?>
                                    <input type="hidden" class="gia" value="<?php echo $kq['giasp'] ?>">
                                    <?php
                                }
                            ?></td>
                            <td><input type="hidden" class="sl" min="0" value="<?php echo $kq['sl'] ?>" onchange="thanhtien('0')"><?php echo $kq['sl']?></td>
                            <td><label for="" class="tt"></label><span> VND</span></td>
                            <td><?php echo $kq['ngaynhan'] ?></td>
                        </tr>
                    </table>
                </div>
                <div class="nganvip"></div>
                <div class="infor">
                    <p>
                        Tên:  <?php echo $kq['tenkhach'] ?><br> <br>
                        Địa Chỉ: <?php echo $kq['diachi'] ?> <br> <br>
                        Số Điện thoại: 0<?php echo $kq['sdt'] ?> <br> <br>
                        <form action="" method="POST">
                            Tình Trạng <br> <br>
                           <select name="tt" id="">
                               <option value="1">Đã xác nhận</option>
                               <option value="2">Đang giao</option>
                               <option value="3">Đã nhận</option>
                               <option value="4">Hủy</option>
                           </select> <br> <br>
                            <button name="btn">Cập Nhập đơn hàng</button>
                        </form>
                        <?php
                            if(isset($_POST['btn'])){
                                $tt=$_POST['tt'];
                                $sqls="UPDATE `don_hang_thuong` SET `tinhtrang` = '$tt' WHERE `don_hang_thuong`.`id_dht` = '$idd'";
                                $kqs=$con->exec($sqls);
                                if($kqs==1){
                                    ?>
                                        <script>
                                            alert("ok nha bé yêu");
                                        </script>
                                    <?php
                                }
                            }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>