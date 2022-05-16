<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza</title>
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="../web_1/style/thanhtoan.css">
    <link rel="stylesheet" href="style/chitiet.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./../duan1-nhom4/assets/fonts/fontawesome-free-5.15.4-web/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<style>
    .modal-content {
    margin: 0 auto;
    width: 50%;
    position: relative;
    display: flex;
    flex-direction: column;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, .2);
    border-radius: .3rem;
    outline: 0;
  }
  .sl{
        width: 30px;
        text-align:center;
        height: 30px;
  }
  .sll{
      padding:4px 13px;
      background-color: tomato;
      border:none;
      color:white;
  }
</style>
<body>
    
    <header>
        <div class="pizzaex">
            <img style="width: 12%;" src="picture/footer_logo1.png" alt="">
            <p>Pizza ngon - Giá rẻ - Vận chuyển tận nhà</p>
            <button id="cart">
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                Giỏ Hàng
            </button>

            <!-- Tài khoản -->
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
                                    <a class="validater-item" href="../admin/quanlysp.php">Quản Lý</a>
                                    </li>                
                                <?php
                        }
                        ?>
                                <li>
                                    <a href="donhang.php?idtk=<?php echo $kqtk['id_tk'] ?>" class="validater-item">Đơn Hàng</a>
                                </li>
                                <li>
                                    <a href="dangxuat.php" class="validater-item">Đăng Xuất</a>
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
                                    <a href="validater-register.php" class="validater-item">Đăng Ký</a>
                                </li>
                                <li>
                                    <a href="validater-login.php" class="validater-item">Đăng nhập</a>
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
                        <h5 class="modal-title">Giỏ Hàng</h5>
                        <span class="close">&times;</span>
                    </div>
                    <div class="modal-body">
                    <?php 
                    if (isset($_SESSION['tentk'])) {
                    $sqlgh="SELECT * FROM `gio_hang` as gh, tk as tkk, sanpham as sp, size as sz WHERE gh.id_s=sz.id_s AND gh.id_tk=tkk.id_tk AND gh.id_sp=sp.id_sp and trangthai='0' AND tkk.user='$tentk'";
                    $kqgh=$con->query($sqlgh);
                    $total=0;
                    foreach($kqgh as $abc => $gh){
                        ?>
                        <div class="cart-row">
                            <span class="cart-item cart-header cart-column"><?php echo $gh['tensp'] ?>:<img width="100" src="picture/<?php echo $gh['anhdd'] ?>" alt=""></span>
                            <span class="cart-price cart-header cart-column">
                                <?php
                                    if($gh['id_dm']==1){
                                        ?>  size: <?php echo $gh['ten_size'] ?>
                                        <?php echo number_format($gh['gia_tien'],0,',','.') ?> VND
                                        <?php
                                    }else{
                                        ?>
                                            <?php number_format($gh['giasp'],0,',','.') ?> VND
                                        <?php
                                    }
                                ?></span>
                            <span class="cart-quantity cart-header cart-column">Số Lượng: <?php echo $gh['sl'] ?></span>
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
                    echo 'Mời bạn đăng nhập để thêm sản phẩm vào giỏ hàng của mình!';
                }
                ?>
                        
                        <div class="cart-items">

                        </div>
                        <div class="cart-total">
                            <strong class="cart-total-title">Tổng Cộng:</strong>
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
                        <button type="button" class="btn btn-secondary close-footer">Đóng</button>
                        <button type="button" class="btn btn-primary order"><a href="giohang.php?idtk=<?php echo $kqtk['id_tk'] ?>">Thanh Toán</a></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu">
            <ul>
                <li><a href="../index.php"><p>Trang Chủ</p></a></li>
                <li><a href="blog.php"><p>Blog</p></a></li>
                <li><a href="contact.php"><p>Liên hệ</p></a></li>
                <!-- <li><a href="#"><p>Trang Chủ</p></a></li>
                <li><a href="#"><p>Trang Chủ</p></a></li> -->
                <li class="li_lienhe">
                    <div class="lienhe">
                        <div class="text_lienhe">
                            <span>Gọi điện ngay - Ship liền tay (24/7)</span>
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
    <?php
        include 'db.php';
        if(isset($_GET['ma'])){
            $ma=$_GET['ma'];
            $sql="SELECT * FROM sanpham as sp, danhmucsp AS dm WHERE sp.id_dm=dm.id_dm AND sp.id_sp='$ma'";
            $kq=$con->query($sql)->fetch();
        }
    ?>

    <section>
   <div class="other">
   <div class="product">
        <img class="sp" width="600" src="picture/<?php echo $kq['anhdd'] ?>" alt="">
    </div>
    <div class="infor">
        <h1><?php echo $kq['tensp'] ?></h1>
        <p class="ct">  
            <?php echo $kq['ttsp'] ?>
        </p>
        <form method="POST" action="">
            
            <?php 
            include 'db.php';
                if($kq['id_dm']==1){
                    ?>
                    <h4>Size - Giá sản phẩm</h4>
                    <?php
                    $sqlsz="select * from size";
                    $kqsz=$con->query($sqlsz);
                    ?>
                        <select class="giasp" name="size" id="">
                    <?php
                    foreach($kqsz as $key => $value){
                        ?>
                        
                        <option  value="<?php echo $value['id_s'] ?>"><?php echo $value['ten_size'] ?> - - <?php echo number_format($value['gia_tien'],0,',','.') ?> VND  </option>
                        
                        <?php
                    }
                    ?>
                        </select>
                    <?php
                }else{
                    
                    ?>
                    <h4>Giá sản phẩm</h4>
                        <p class="gia"><?php echo number_format($kq['giasp'],0,',','.') ?> VND</p>
                    <?php
                }
            ?>
                
            <input type="hidden" name="idsp" value="<?php echo $kq['id_sp'] ?>"> <br>
            <input class="sll" onclick="var result = document.getElementById('quantity'); var qty = result.value; if( !isNaN(qty) &amp; qty > 1 ) result.value--;return false;" type='button' value='-' />
                    <input class="sl" id='quantity' min='1' name='sl' type='text' value='1' />
            <input class="sll" onclick="var result = document.getElementById('quantity'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" type='button' value='+' /> <br> <br>
           <!-- <p>Số Lượng</p> <input class="sl" type="number" name="sl" value='1' step='1' min='1'> <br> -->
           <?php
            if(isset($_SESSION['tentk'])){
                $tentk=$_SESSION['tentk'];
                $sqltk="select * from tk where user='$tentk'";
                $kqtk=$con->query($sqltk)->fetch();
                ?>
                <input type="hidden" name="idtk" value="<?php echo $kqtk['id_tk'] ?>">
                    <button name="btn">Thêm Vào Giỏ Hàng</button>
                    <button name="btndd" id="open"><a href="#my-dialog">Mua Hàng</a></button>
                <?php
            }else{
                ?>
                    
                    <button name="btndd" id="open"><a href="#my-dialog">Mua Hàng</a></button>
                <?php
            }
           ?>
        </form>
        
        <?php
            
            if(isset($_POST['btn'])){
                $id_sp=$_POST['idsp'];
                $sl=$_POST['sl'];
                $idtk=$_POST['idtk'];
                if($kq['id_dm']==1){
                       $size=$_POST['size'];
                       $sqlgh="insert into gio_hang values(null, '$id_sp', '$idtk', '$sl', '$size', '0', '0')";
                       $kqgh=$con->exec($sqlgh);
                    //    $sqldhgh="insert into dh_gh values(null, '$id_sp', '$idtk', '$sl', '$size', '0')";
                    //    $kqdhgh=$con->exec($sqldhgh);
                       if($kqgh==1){
                           ?>
                                <script>
                                    alert("Bạn đã thêm vào giỏ hàng thành công");
                                </script>
                           <?php
                       }
                }else{
                    $sqlgh="insert into gio_hang values(null, '$id_sp', '$idtk', '$sl', '1', '0', '0')";
                    $kqgh=$con->exec($sqlgh);
                    if($kqgh==1){
                        ?>
                             <script>
                                 alert("Bạn đã thêm giỏ hàng thành công");
                             </script>
                        <?php
                }
            }}
        ?>
    </div>
   </div>
</section>

<div class="popup" id="my-dialog">
    <div class="overlay"></div>
    <div class="modal_body">
        <div class="modal_inter">
                <a class="close" href="#">&times;</a> <br>
                <h3>Điền Thông Tin Khách Hàng</h3> 
                <form class="dh" action="" method="POST">
                    <br>
                <input type="hidden" name="idsp" value="<?php echo $kq['id_sp'] ?>">
                <?php 
                if($kq['id_dm']==1){
                    $sqlsz="select * from size";
                    $kqsz=$con->query($sqlsz);
                    ?>
                        <select class="giasp-popup" name="sized" id="">
                    <?php
                    foreach($kqsz as $key => $value){
                        ?>
                        
                        <option  value="<?php echo $value['id_s'] ?>"><?php echo $value['ten_size'] ?> - - <?php echo $value['gia_tien'] ?> VND  </option>
                        
                        <?php
                    }
                    ?>
                        </select> <br>
                    <?php
                }
            ?>  <label for="">Số Lượng</label>: <br>
                <input type="number" name="sld" value="1" min="1" step="1"> <br>
                <label for="">Họ Tên</label>: <br>
                <input type="text" name="ten"> <br>
                <label for="">Địa chỉ</label>: <br>
                <input type="text" name="dia"> <br>
                <label for="">Số Điện Thoại</label>: <br>
                <input type="text" name="sdt"> <br>
                <input type="hidden" name="ngay" value="<?php echo date('Y/m/d') ?>">
                <button name="btnd">Đặt hàng</button>
                </form>
                <?php
                    if (isset($_POST['btnd'])) {
                        $idsp=$_POST['idsp'];
                        $ten=$_POST['ten'];
                        $dia=$_POST['dia'];
                        $sdt=$_POST['sdt'];
                        $sld=$_POST['sld'];
                        $ngay=$_POST['ngay'];
                        if($kq['id_dm']==1) {
                            $ids=$_POST['sized'];
                            $sqld="insert into don_hang_thuong values(null, '$idsp', '$ids', '$ten', '$sld', '$dia', '$sdt', '$ngay', 'Chờ xác nhận' )";
                            $kqd=$con->exec($sqld);
                            if ($kqd==1) {
                                ?>
                                <script>
                                    alert("Đặt hàng thành công! Đơn hàng sẽ nhanh chóng đến với bạn");
                                </script>
                                <?php
                            }
                        }else{
                            $sqld="insert into don_hang_thuong values(null, '$idsp', '1', '$ten', '$sld', '$dia', '$sdt', '$ngay', 'Chờ xác nhận' )";
                            $kqd=$con->exec($sqld);
                            if ($kqd==1) {
                                ?>
                                <script>
                                    alert("Đặt hàng thành công! Đơn hàng sẽ nhanh chóng đến với bạn");
                                </script>
                                <?php
                            }
                        }

                    }
                ?>
        </div>
    </div>

    
</div>
<div class="splq">
        <h1>Sản phẩm liên quan</h1>
        <div class="dm">
            <?php 
                $iddm=$kq['id_dm'];
                $sqllq="select * from sanpham where id_dm='$iddm'";
                $kqlq=$con->query($sqllq);
                foreach($kqlq as $splq =>$lq ){
                    ?>
                    <div class="spdm">
                        <div><img src="picture/<?php echo $lq['anhdd'] ?>" alt=""></div>
                        <p class="tsplq"><?php echo $lq['tensp'] ?> </p>
                        <p class="gsplq"><?php echo number_format($lq['giasp'] ,0,',','.')?> VND</p>
                        <button class="chon"><a href="chitietsp.php?ma=<?php echo $lq['id_sp'] ?>">Mua hàng</a></button>
                    </div>

                    <?php
                }
            ?>
        </div>
    </div>
    <footer>
        <img style="width:15%;" src="picture/footer_logo1.png" alt="">
        <h4>CÔNG TY TNHH PIZZA EXPRESS VIỆT NAM</h4>
        <p>Để đặt bánh pizza, vui lòng liên hệ tổng đài số: 024.36.888.777</p>
        <p>Để phản ánh chất lượng dịch vụ, vui lòng gọi số: 0989.139.565</p>
        <p>Email: lienhepizzaexpress@gmail.com</p>
        <p>Chính sách bảo mật thông tin cá nhân</p>
        <p>Chính sách đổi/trả sản phẩm và hoàn tiền</p>
        <p>Chính sách thanh toán</p>
        <img src="picture/footer_line.png" alt="">
        <div class="dia_chi_lien_he">
            <div class="lien_he">
                <img src="picture/so_01.png" alt="">
                <p>107 D3 Ngọc Khánh, Ba Đình</p>
                <a href="#">Xem trên bản đồ</a>
            </div>
            <div class="lien_he">
                <img src="picture/so_02.png" alt="">
                <p>107 D3 Ngọc Khánh, Ba Đình</p>
                <a href="#">Xem trên bản đồ</a>
            </div>
            <div class="lien_he">
                <img src="picture/so_03.png" alt="">
                <p>107 D3 Ngọc Khánh, Ba Đình</p>
                <a href="#">Xem trên bản đồ</a>
            </div>
            <div class="lien_he">
                <img src="picture/so_04.png" alt="">
                <p>107 D3 Ngọc Khánh, Ba Đình</p>
                <a href="#">Xem trên bản đồ</a>
            </div>
        </div>
        <img src="picture/20150827110756-dathongbao-e1541406698873.png" alt="" style="margin-top: 20px; margin-bottom: 20px;">
        <p>Công ty TNHH Pizza Express Việt Nam Số ĐKKD: 0106675108</p>
        <p>Địa Chỉ: Số 352 Đường Bưởi, P.Vĩnh Phúc, Q.Ba Đình, TP.Hà Nội</p>
        <p>Số điện thoại: 02436888777</p>
        <p style="padding-bottom: 50px;">Email: lienhepizzaexpress@gmail.com</p>
    </footer>
    <script src="index.js"></script>
    <script src="thanhtoan.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>