<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="../web_1/style/thanhtoan.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./../assets/fonts/fontawesome-free-5.15.4-web/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
}
/* aside{
    margin: auto;
    width: 80%;
} */
/* .menu>ul{
    margin: 15px 50px 10px 220px;
    list-style: none;

} */
/* .menu ul ul{
    position: absolute;
    display: none;
    padding: 10px 0px;
    margin: 0px;
    list-style: none;
    border-radius:3px ;
    background-color: white;
    box-shadow: 0px 3px 3px gray;
} */
/* .ndm{

    width: 160px;
    height: 1px;
    background-color: gray;
    margin-left: 30px;
} */
/* .dmm{
    margin:0px 30px;
} */
/* .menu ul ul a{
    background-color: white;
    
    display: block;
    line-height: 30px;
    color: gray;
    text-decoration: none;
    font-weight: normal;
    padding: 0px 35px;
    
} */
/* .menu>ul>li{
    display: inline-block;
    position: relative;
    padding: 0px 0px;
} */
/* .menu>ul>li>a{
    display: block;
    text-decoration:none ;
    
    color: white;
    padding: 0px 10px;
    line-height: 40px;
    font-weight: bold;
    font-family: Arial, Helvetica, sans-serif; */
/* }.menu>ul>li:hover>ul{
    display: block;
   
} */
/* .item-menu{
    color: white;
    text-decoration: none;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 11px;
    padding: 0px 85px;
    display:inline-block;
}
.tentk{
    font-weight: bold;
    color: white;
}
.gh{
    float: left;
} */

/* .sign{
    margin: 27px 0px;
} */
/* .sign a{
    font-size: 15px;
    font-family: sans-serif;
    color: white;
    margin:10px 10px
} */


/* .nganvip{
    width: 100%;
    height: 3px;
    background-color: gray;
    /* margin: 10px 0px; */
} */

.cha td{
    font-family: Arial, Helvetica, sans-serif;
    color:red;
    font-weight: bold;
    padding: 10px 0px;
    text-align:center;
    font-size:18px;
}

footer{
    margin-top:150px;
}
h1{
    text-align:center;
    margin: 50px 0px 70px 0px;
    font-weight:bold;
    color:rgb(255, 217, 1);
}
/* footer{
    margin-top: 100px;
    background-color: rgb(211, 210, 210);
    width: 100%;
}
.cot1{
    color: white;
    text-decoration: none;
    display: block;
   padding-left: 100px;
    font-size: 15px;
}
.cot2{
    padding: 15px;
    color: white;
    padding-left:70px;
    font-size: 20px;
    text-decoration: none;
}
.foot{
    display: grid;
    grid-template-columns: 20% 20% 20% 20%;
    padding: 50px;
} */
.table{
            background-color: rgb(248, 248, 248);
            width: 100%;
            margin: 0px 0px;
            float: right;
        }
        table{
            width: 80%;
            margin:auto;    
        }
        button{
            border-radius:5px;
            padding: 5px 15px;
            background-color: rgb(247, 70, 39);
            border:none;
        }
        .ctdh{
            margin: 0px 0px 30px 50px;
            padding: 5px 15px;
            background-color: rgb(95, 95, 196);
            border:none;
        }
        button a{
            text-decoration: none;
            color: white;
        }
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
        }
        .daubai td{
            font-weight:bold;
            padding: 0px 0px;
        }
        td{
            font-family: Arial, Helvetica, sans-serif;
            text-align:center;
            padding:20px 10px;
        }
    </style>
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
</head>
<body>
<header>
        <div class="pizzaex">
            <img style="width: 12%;" src="picture/footer_logo1.png" alt="">
            <p>Pizza ngon - Gi?? r??? - V???n chuy???n t???n nh??</p>
            <button id="cart">
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                Gi??? H??ng
            </button>

            <!-- T??i kho???n -->
            <div class="header__acc">
                <a href="" class="header__acc-link">
                    <i class="fas fa-user header__acc-icon"></i> <br>
                </a>
               
                        <div class="validater">
                            <ul class="validater-list">
                            <?php 
                include 'db.php';
                    if(isset($_SESSION['tentk'])){
                        $tentk=$_SESSION['tentk'];
                        $sqltk="select * from tk where user='$tentk'";
                        $kqtk=$con->query($sqltk)->fetch();
                        if($kqtk['quyen']==1){
                                ?>
                                <li>
                                <a class="validater-item" href="../admin/quanlysp.php">Qu???n L??</a> 
                                </li>
                                                   
                                <?php
                        }
                        ?>
                                <li>
                                    <a href="dangxuat.php" class="validater-item">????ng Xu???t</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                        
                                <?php
                    }else{
                        ?>
                        <!-- <div class="validater">
                            <ul class="validater-list"> -->
                                <li>
                                    <a href="validater-register.php" class="validater-item">????ng K??</a>
                                </li>
                                <li>
                                    <a href="validater-login.php" class="validater-item">????ng nh???p</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                        
                        <?php
                    }
                ?>
               
                        
            <div id="myModal" class="modal">
               
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Gi??? H??ng</h5>
                        <span class="close">&times;</span>
                    </div>
                    <div class="modal-body">
                    <?php 
                    if (isset($_SESSION['tentk'])) {
                    $sqlgh="SELECT * FROM `gio_hang` as gh, tk as tkk, sanpham as sp, size as sz WHERE gh.id_s=sz.id_s AND gh.id_tk=tkk.id_tk AND gh.id_sp=sp.id_sp AND gh.trangthai='0' and tkk.user='$tentk'";
                    $kqgh=$con->query($sqlgh);
                    $total=0;
                    foreach($kqgh as $abc => $gh){
                        ?>
                        <div class="cart-row">
                            <span class="cart-item cart-header cart-column"><img width="50" src="picture/<?php echo $gh['anhdd'] ?>" alt="">:<?php echo $gh['tensp'] ?></span>
                            <span class="cart-price cart-header cart-column">
                                <?php
                                    if($gh['id_dm']==1){
                                        ?>  size: <?php echo $gh['ten_size'] ?>
                                        <?php echo number_format($gh['gia_tien'],0,',','.')  ?> VND
                                        <?php
                                    }else{
                                        ?>
                                            <?php echo number_format($gh['giasp'],0,',','.')  ?> VND
                                        <?php
                                    }
                                ?></span>
                            <span class="cart-quantity cart-header cart-column">S??? L?????ng: <?php echo $gh['sl'] ?></span>
                        </div>

                        <?php
                        if ($gh['id_dm']==1) {
                            $tong=$gh['gia_tien']*$gh['sl'];
                        }else {
                            $tong=$gh['giasp']*$gh['sl'];
                        }

                        $total += $tong;
                    }
                }else{
                    echo 'M???i b???n ????ng nh???p ????? th??m s???n ph???m v??o gi??? h??ng c???a m??nh!';
                }
                ?>
                        
                        <div class="cart-items">

                        </div>
                        <div class="cart-total">
                            <strong class="cart-total-title">T???ng C???ng:</strong>
                            <?php
                                if(isset($_SESSION['tentk'])){
                                    ?>
                                        <span class="cart-total-price"><?php echo number_format($total,0,',','.') ?>VND</span>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-footer">????ng</button>
                        <button type="button" class="btn btn-primary order"><a href="giohang.php?idtk=<?php echo $kqtk['id_tk'] ?>">Thanh To??n</a></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu">
            <ul>
                <li><a href="../index.php"><p>Trang Ch???</p></a></li>
                <li><a href="blog.php"><p>Blog</p></a></li>
                <li><a href="contact.php"><p>Li??n h????</p></a></li>
                <!-- <li><a href="#"><p>Trang Ch???</p></a></li>
                <li><a href="#"><p>Trang Ch???</p></a></li> -->
                <li class="li_lienhe">
                    <div class="lienhe">
                        <div class="text_lienhe">
                            <span>G???i ??i???n ngay - Ship li???n tay (24/7)</span>
                        </div>
                        <div class="sdt">
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                            <span>(024)36888777</span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
<!-- Shopping Cart -->
 <h1> Ch??o <?php echo $_SESSION['tentk'] ?></h1>
   <div class="giohang">
   <table method="POST">
                        <tr class="daubai">
                            <!-- <td>id</td> -->
                            <td>T??n Kh??ch H??ng</td>
                            <td>?????a ch???</td>
                            <td>S??? ??i???n Tho???i</td>
                            <td>Ghi Ch??</td>
                            <td>Ng??y</td>
                            <td>T??nh tr???ng</td>
                        </tr>
                        <tr>
                    <td colspan="8"><div class="ngan"></div></td>
                </tr>
                        <?php
                    include '../web_1/db.php';
                    if(isset($_GET['idtk'])){
                     $idtk=$_GET['idtk'];
                    $sql="SELECT * FROM `don_hang` where id_tk='$idtk'";
                    $kq=$con->query($sql);
                    foreach($kq as $key => $value){
                        ?>
                         <tr>
                            <!-- <td><?php echo $value['id_dh'] ?></td> -->
                            <td><?php echo $value['tenkh'] ?></td>
                            <td><?php echo $value['diachi'] ?></td>
                            <td>0<?php echo $value['sdt'] ?></td>
                            <td><?php echo $value['ghichu'] ?></td>
                            <td><?php echo $value['ngay'] ?></td>
                            <td><?php 
                                if($value['tinhtrang']==1){
                                    echo '???? x??c nh???n';
                                }else if($value['tinhtrang']==2){
                                    echo '??ang giao';
                                }else if($value['tinhtrang']==3){
                                    echo '???? nh???n';
                                }else if($value['tinhtrang']==4){
                                    echo 'H???y';
                                }else{
                                    echo 'Ch??? x??c nh???n';
                                }
                            ?></td>
                            <td><button><a href="ctdh.php?iddh=<?php echo $value['id_dh']?>">Chi ti???t ????n h??ng</a></button></td>
                        </tr>
                        <tr>
                            <td colspan="8"><hr></td>
                        </tr>

                        <?php
                    }}
                ?>
                    </table>
   </div>
    
    <!-- <div class="from">
    <div class="nho">
        </div>
        <h5>Th??ng Tin Thanh To??n <br>
        <span class="mmm">-------------------------------------------------------------------------------------------------------</span>
        </h5>
        
        <form action="" method="POST">
            <label for="">H??? v?? t??n</label>: <br>
            <input name="tenkh" type="text"> <br>
            <label  for="">?????a ch???</label>:<br>
            <input name="diachi" type="text">
            <label for="">S??? ??i???n Tho???i</label>:<br>
            <input name="sdt" type="text">
            <label for="">GHi ch??</label> <br>
            <textarea name="ghichu" id="" cols="44" rows="3"></textarea> <br>
            <input type="hidden" name="ngay" value="<?php echo date("Y/m/d") ?>">
        
        <span class="mmmm">---------------------------------------------------------------------------------------------</span>
        <button name="btn">?????t H??ng</button>
        </form>
        <!-- <form action="" method="POST">
            <input type="text" name="ten" id="">
            <input type="text" name="ten" id="">
            <input type="text" name="ten" id="">
            <input type="text" name="ten" id="">
        </form> -->
            <?php
            include 'db.php';
                if(isset($_POST['btn'])){
                    $ma=$idtk;
                    $tenkh=$_POST['tenkh'];
                    $diachi=$_POST['diachi'];
                    $sdt=$_POST['sdt'];
                    $ghichu=$_POST['ghichu'];
                    $ngay=$_POST['ngay'];
                    $sqldh="insert into don_hang values(null, '$idtk', '$tenkh', '$diachi', '$sdt', '$ghichu', '$ngay', 'Ch??? x??c nh???n')";
                    $kqdh=$con->exec($sqldh);
                    if($kqdh==1){
                        $sqlx="update gio_hang set trangthai='1' where id_tk='$idtk'";
                        $kqx=$con->prepare($sqlx);
                        if($kqx->execute()){
                            $sqx="select * from gio_hang where id_tk='$idtk'";
                            $kqlx=$con->query($sqx);
                            foreach ($kqlx as $key => $xx) {
                                if($xx['oderolds']==0){
                                    $sqlm="select max(id_dh) from don_hang";
                                    $kqm=$con->query($sqlm)->fetch();
                                    $oder=$kqm['max(id_dh)'];
                                    $sqlh="update gio_hang set oderolds='$oder' where id_tk='$idtk' and oderolds='0' ";
                                    $kqh=$con->prepare($sqlh);
                                    if($kqh->execute()){
                                        ?>
                                            <script>
                                                alert("B???n ?????t h??ng th??nh c??ng");
                                            </script>
                                        <?php
                                    }
                                    
                                }
                            }
                            
                        }else{
                            echo "ko";
                        }
                        
                    }
                }
            ?>
        
    </div> 


    <footer>
        <img style="width:15%;" src="picture/footer_logo1.png" alt="">
        <h4>C??NG TY TNHH PIZZA EXPRESS VI???T NAM</h4>
        <p>????? ?????t b??nh pizza, vui l??ng li??n h??? t???ng ????i s???: 024.36.888.777</p>
        <p>????? ph???n ??nh ch???t l?????ng d???ch v???, vui l??ng g???i s???: 0989.139.565</p>
        <p>Email: lienhepizzaexpress@gmail.com</p>
        <p>Ch??nh s??ch b???o m???t th??ng tin c?? nh??n</p>
        <p>Ch??nh s??ch ?????i/tr??? s???n ph???m v?? ho??n ti???n</p>
        <p>Ch??nh s??ch thanh to??n</p>
        <img src="picture/footer_line.png" alt="">
        <div class="dia_chi_lien_he">
            <div class="lien_he">
                <img src="picture/so_01.png" alt="">
                <p>107 D3 Ng???c Kh??nh, Ba ????nh</p>
                <a href="#">Xem tr??n b???n ?????</a>
            </div>
            <div class="lien_he">
                <img src="picture/so_02.png" alt="">
                <p>107 D3 Ng???c Kh??nh, Ba ????nh</p>
                <a href="#">Xem tr??n b???n ?????</a>
            </div>
            <div class="lien_he">
                <img src="picture/so_03.png" alt="">
                <p>107 D3 Ng???c Kh??nh, Ba ????nh</p>
                <a href="#">Xem tr??n b???n ?????</a>
            </div>
            <div class="lien_he">
                <img src="picture/so_04.png" alt="">
                <p>107 D3 Ng???c Kh??nh, Ba ????nh</p>
                <a href="#">Xem tr??n b???n ?????
                </a>
            </div>
        </div>
        <img src="picture/20150827110756-dathongbao-e1541406698873.png" alt="" style="margin-top: 20px; margin-bottom: 20px;">
        <p>C??ng ty TNHH Pizza Express Vi???t Nam S??? ??KKD: 0106675108</p>
        <p>?????a Ch???: S??? 352 ???????ng B?????i, P.V??nh Ph??c, Q.Ba ????nh, TP.H?? N???i</p>
        <p>S??? ??i???n tho???i: 02436888777</p>
        <p style="padding-bottom: 50px;">Email: lienhepizzaexpress@gmail.com</p>
    </footer>
    <script src="index.js"></script>
    <script src="thanhtoan.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 
</body>
</html>