<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <!-- <script>
        var gia=document.getElementsByClassName("gia");
        var sl=document.getElementsByClassName("sl");
        var tt=document.getElementsByClassName("tt");
        function thanhtien(i){
            tt[i].innerHTML=gia[i].value*sl[i].value
            tinhtien()
        }
        window.onload=function(){
            for(i=0;i<gia.length;i++){
                tt[i].innerHTML=gia[i].value*sl[i].value;
            }
        }
    </script> -->
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
            width: 5px;
            height: 300px;
            background-color: gray;
        }
        .nganvip{
            width: 100%;
            height: 3px;
            background-color: gray;
        }
        input{
            width: 100px;
        }
        img{
            margin:20px 30px;
        }
        .cha{
            font-weight:bold;
        }
        .fab{
            font-size: 30px;
        }
        .fas{
            font-size: 30px;
        }
.total td{
    padding: 15px 0px;
    margin:15px 0px;
    font-size:20px;
    font-weight:bold;
    color:tomato;
}
.chu{
    position: relative;
    /* float:left; */
    bottom: 9px;
    margin:5px 10px 0px 0px 
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
            <button><a href="quanlydh.php">Đơn hàng Thành Viên</a></button>
            <div class="table_body">
                <div class="table_sp">
                    <table method="POST">
                        <tr class="cha">
                            <td class="tenpd">Product</td>
                            <td style="width: 200px;"></td>
                            <td style="width: 210px;">Price</td>
                            <td style="width: 150px;">Quantiny</td>
                            <td style="width: 100px;">Total</td>
                        </tr>
                        <td colspan="6"><div class="nganvip"></div></td>
                        <?php
                            include '../web_1/db.php';
                            if (isset($_GET['iddh'])) {
                                $iddh=$_GET['iddh'];
                                $sql="SELECT * FROM don_hang AS dh, gio_hang as gh, tk as tkk, sanpham as sp, size as sz WHERE dh.id_tk=tkk.id_tk AND gh.id_s=sz.id_s AND gh.id_tk=tkk.id_tk AND gh.id_sp=sp.id_sp and trangthai='1' AND gh.oderolds='$iddh' AND gh.oderolds=dh.id_dh";
                                $kq=$con->query($sql);
                                $total=0;
                                foreach($kq as $key => $value){
                                    ?>
                                    <tr>
                                        <td><?php echo $value['tensp'] ?></td>
                                        <td><img width="50" src="../web_1/picture/<?php echo $value['anhdd'] ?>" alt=""></td>
                                        <td><?php
                                            if ($value['id_dm']==1) {
                                                echo 'size '.$value['ten_size']; ?> - <?php echo number_format($value['gia_tien'],0,',','.'); echo ' VND' ;
                                                ?>
                                                    <input type="hidden" class="gia" value="<?php echo $value['gia_tien'] ?>">
                                                <?php
                                            }else{
                                                echo number_format($value['giasp'],0,',','.'); echo ' VND';
                                                ?>
                                                     <input type="hidden" class="gia" value="<?php echo $value['giasp'] ?>"  name="" id="">
                                                <?php
                                            }
                                        ?></td>
                                        <td class="quantiny"><input type="hidden" class="sl" min="0" value="<?php echo $value['sl'] ?>" ><?php echo $value['sl'] ?></td>
                                        <td class="tt"><?php
                                            if ($value['id_dm']==1) {
                                                echo number_format($tong=$value['gia_tien']*$value['sl'],0,',','.') ;
                                            }else {
                                                echo number_format($tong=$value['giasp']*$value['sl'],0,',','.');
                                            }?><span class="dong"> đ</span></td>
                                    </tr>
                                    <tr>
                                        <td colspan="6"><hr></td>
                                    </tr>
                                    

                                    <?php
                                    if($value['vocherdh']>0){
                                        $giamgia=$value['vocherdh'];
                                        $phantram=100;
                                        $vocher = $giamgia/$phantram;
                                        $total += $tong;
                                    }elseif ($value['vocherdh']==0) {
                                        $vocher=0;
                                        $total += $tong;
                                    }
                                   
                                }
                            }
                        ?>
                                    <tr class="total">
                                        <td colspan="1"></td>
                                        <td colspan="2">Tổng đơn Hàng <p>
                                            <?php
                                                if($vocher>0){
                                                    echo "Khách hàng có vorcher 10% tổng đơn hàng";
                                                    echo "<br>";
                                                }
                                            ?></p></td>
                                        <td class="tt" colspan="1">
                                            <?php 
                                                if($vocher>0){
                                                    echo number_format($total,0,',','.'); echo "<br>"; ?><span class="chu">_</span><?php echo "<br>"; 
                                                    echo number_format(($total*$vocher),0,',','.');echo "<br>";
                                                    echo number_format($total-($total*$vocher),0,',','.'); 
                                                }elseif ($vocher==0) {
                                                    echo number_format($total,0,',','.');
                                                }
                                            ?> <span>đ</span></td>
                                    </tr>
                    </table>
                </div>
                <div class="ngan"></div>
                <div class="infor">
                 <?php
                        if (isset($_GET['iddh'])) {
                            $iddh=$_GET['iddh'];
                            $sqltt="select * from don_hang where id_dh='$iddh'";
                            $kqtt=$con->query($sqltt)->fetch();
                        }
                    ?>
                    <p>
                        Tên: <?php echo $kqtt['tenkh'] ?> <br> <br>
                        Địa Chỉ: <?php echo $kqtt['diachi'] ?><br> <br>
                        Số Điện thoại: <?php echo $kqtt['sdt'] ?> <br> <br>
                        <label for="">Tình trạng đơn hàng</label> :
                        <form action="" method="POST">
                           <select name="tinhtrang" id="">
                               <option value="1">Đã xác nhận</option>
                               <option value="2">Đang giao</option>
                               <option value="3">Đã nhận</option>
                               <option value="4">Hủy</option>
                           </select> <br> <br>
                            <button name="btn">Cập nhập</button>
                        </form>
                        <?php
                            if(isset($_POST['btn'])){
                                $tt=$_POST['tinhtrang'];
                                $sqls="UPDATE `don_hang` SET `tinhtrang` = '$tt' WHERE `don_hang`.`id_dh` = $iddh";
                                $kqs=$con->exec($sqls);
                                if ($kqs==1) {
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