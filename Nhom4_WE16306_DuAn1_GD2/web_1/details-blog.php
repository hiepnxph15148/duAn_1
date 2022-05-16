<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lý Do Khiến Công Việc Của Người Thợ Làm Bánh Pizza Luôn Bền Vững</title>

    <!-- Link CSS -->
    <link rel="stylesheet" href="./../assets/css/base.css">
    <link rel="stylesheet" href="./../assets/css/details-blog.css">
    <!-- Link font Icon -->
    <link rel="stylesheet" href="./../assets/fonts/fontawesome-free-5.15.4-web/css/all.min.css">
    <!-- Link font chữ -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">

<body>
    <div class="main">
        <header>
            <div class="pizzaex">
                <img style="width: 12%;" src="./../assets/img/logo-order.5f3ca2a0.png" alt="">
                <p>Pizza ngon - Giá rẻ - Vận chuyển tận nhà</p>
                <button id="cart">
                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                    Giỏ Hàng
                </button>

                <div class="header__acc">
                    <a href="" class="header__acc-link">
                        <i class="fas fa-user header__acc-icon"></i>
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
                                <a href="validater-register.php" class="validater-item">Đăng ký</a>
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
                    $sqlgh="SELECT * FROM `gio_hang` as gh, tk as tkk, sanpham as sp, size as sz WHERE gh.id_s=sz.id_s AND gh.id_tk=tkk.id_tk AND gh.id_sp=sp.id_sp AND gh.trangthai='0' and tkk.user='$tentk'";
                    $kqgh=$con->query($sqlgh);
                    $total=0;
                    foreach($kqgh as $abc => $gh){
                        ?>
                        <div class="cart-row">
                            <span class="cart-item cart-header cart-column"><img width="50" src="./picture/<?php echo $gh['anhdd'] ?>" alt="">:<?php echo $gh['tensp'] ?></span>
                            <span class="cart-price cart-header cart-column">
                                <?php
                                    if($gh['id_dm']==1){
                                        ?>  size: <?php echo $gh['ten_size'] ?>
                                        <?php echo $gh['gia_tien'] ?> VND
                                        <?php
                                    }else{
                                        ?>
                                            <?php echo $gh['giasp'] ?> VND
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

        <section id="web_title">
            <div class="grid">
                <div class="">
                    <h1>Blog</h1>
                    <div class="breadcrumbs">
                        <span>
                             <span>
                                 <a href="#">Trang chủ</a> / <a href="./blog.html">Liên hệ</a> / <a href="./details-blog.html">Lý Do Khiến Công Việc Của Người Thợ Làm Bánh Pizza Luôn Bền Vững</a>
                            </span>
                        </span>
                    </div> 		
                </div>
            </div>
        </section>

        <?php
            include 'db.php';
            if(isset($_GET['mabv'])){
                $id_bv=$_GET['mabv'];
                $sql="select * from baiviet where id_bv='$id_bv'";
                $kq=$con->query($sql)->fetch();
            }
        ?>
        <div id="content">
            <div class="grid">
                <div class="archive">
                    <div class="archive_content">
                        <h3 class="archive_content-title"><?php echo $kq['tenbv'] ?></h3>

                        <div class="single_content">
                            <p>
                                <span style="font-weight: 400;">
                                <?php echo $kq['tinvt'] ?>
                                </span>
                            </p>
                            <table
                                style="width: 100%; border-collapse: collapse; background-color: #faefd7; border-color: #ff0000; margin-bottom: 10px;"
                                border="1,5" cellpadding="5">
                                <tbody>
                                    <tr>
                                        <td style="width: 100%; text-align: center; padding: 5px 0;">
                                            <em>
                                                <span style="font-size: 14pt;">
                                                    <span style="color: #ff6600;">Để được miễn phí giao hàng, gọi ngay Pizza Capichi</span>
                                                    <a style="color: rgb(96, 96, 255);" href="#">tại đây</a>
                                                </span>
                                            </em>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p><span style="font-weight: 400;">Trapizzino, một loại sandwich riêng pha trộn với phong
                                    cách bánh pizza. Các cẩm nang du lịch coi là một trong những món ăn đường phố nhất
                                    thiết du khách phải nếm khi đến Italy.</span></p>
                            <p><img src="./../assets/img/<?php echo $kq['anhbv'] ?>" alt=""
                                        width="100%"/></p>
                            <p><b>Hành Trình Ra Đời Của Chiếc Bánh Sandwich</b></p>

                            <p><span style="font-weight: 400;"><?php echo $kq['tinct'] ?></span></p>

                            <p><b>Tận Hưởng Những Chiếc Bánh Pizza Thơm Ngon Với Đặc Trưng Riêng</b></p>

                            <p><span style="font-weight: 400;">Hãy cùng đến Pizza Capichi để trải nghiệm những món mới
                                    với những ƯU ĐÃI vô cùng lớn nhé. Chúng tôi luôn mong muốn gửi đến bạn những bữa ăn
                                    chất lượng với giá hợp lý nhất.</span></p>
                                    
                            <p><span style="font-weight: 400;">Pizza Capichi với giá hợp lý, phù hợp với mọi lứa tuổi
                                    của về giá cả và chất lượng. Với 3 tiêu chí một trong những thương hiệu Pizza Việt
                                    Nam. Tiên phong với tiêu chí Pizza Ngon, Giá hợp lý, Phục vụ tại nhà.&nbsp;</span>
                            </p>

                            <p><b>Pizza Capichi Với 3 Tiêu Chí: Pizza ngon – Giá rẻ – Vận chuyển tận nhà</b></p>

                            <p><span style="font-weight: 400;">Hãy cùng đến Pizza Capichi để trải nghiệm những món mới
                                    với những ƯU ĐÃI vô cùng lớn nhé. Pizza Capichi chúng tôi luôn mong muốn gửi đến bạn
                                    những bữa ăn chất lượng với giá hợp lý nhất.</span></p>

                            <p><span style="font-weight: 400;">Pizza Capichi với giá hợp lý, phù hợp với mọi lứa tuổi
                                    của về giá cả và chất lượng. Pizza Capichi, một trong những thương hiệu Pizza Việt
                                    Nam. Tiên phong với tiêu chí Pizza Ngon, Giá hợp lý, Phục vụ tại nhà.</span></p>

                            <p><span style="font-weight: 400;">– Xem thêm thực đơn tai: </span>
                                <a href="#">
                                    <span style="font-weight: 400;">Menu Hấp Dẫn Mỗi Ngày Của Pizza Capichi</span>
                                </a>
                            </p>

                            <p><span style="font-weight: 400;">– Xem khuyến mại tại: </span>
                                <a href="#">
                                    <span style="font-weight: 400;">Khuyến Mại Bất Ngờ Đón Chờ Bạn Click</span>
                                </a>
                            </p>

                            <p><span style="font-weight: 400;">– Cập nhật khuyến mại mới tại: </span>
                                <a href="#">
                                    <span style="font-weight: 400;">365 Ngày Bất Ngờ Khác Biệt</span>
                                </a>
                            </p>
                        
                            <p>
                                <span style="font-weight: 400;">Pizza Capichi nghĩ rằng để giúp cho việc phục phụ được
                                    ngày một tốt hơn. Khách hàng đặt Pizza nên gọi điện đặt trước để nhà hàng có thể đem
                                    tới bạn những tư vấn và hỗ trợ đạt chuẩn dịch vụ 5*
                                </span>
                            </p>

                            <p><span style="font-weight: 400;">═════════ PIZZA CAPICHI ═════════</span></p>
                            <p><b>👉 Pizza Capichi HIỆN CÓ 4 CƠ SỞ TẠI HÀ NỘI:</b></p>
                            <p><b>🏪 CS1: D3 Ngọc Khánh, Ba Đình, Hà Nội</b></p>
                            <p><b>🏪 CS2: 332 Nguyễn Trãi, Thanh Xuân, Hà Nội</b></p>
                            <p><b>🏪 CS3: Số 6 Trần Bình, Cầu Giấy, Hà Nội.</b></p>
                            <p><b>🏪 CS4: 52 Kim Đồng, Hoàng Mai, Hà Nội.</b></p>
                            <p>&nbsp;</p>
                        </div>
                    </div>


                    <div class="archive_widget">
                        <div class="archive_widget-all">
                            <h3 class="widget-title">BÀI VIẾT KHÁC</h3>
                            <ul>
                                <?php
                                    $sqlbv="select * from baiviet";
                                    $kqbv=$con->query($sqlbv);
                                    foreach($kqbv as $key => $value){
                                        ?>
                                <li class="wview_item">
                                    <div class="wview_thumb">
                                        <img width="100%" src="./../assets/img/<?php echo $value['anhbv'] ?>">
                                    </div>
                                    <div class="wview_text">
                                        <h3><a href="./details-blog.php?mabv=<?php echo $value['id_bv'] ?>" title="Pizza blog"><?php echo $value['tenbv'] ?></a></h3>
                                        <span>05-11-2021</span>
                                    </div>
                                </li>
                                        <?php
                                    }
                                ?>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="footer">
            <div class="footer-1">
                <div class="grid">
                    <div class="wrap-column">
                        <div class="footer__rate">
                            <div class="footer__rate-container">
                                <div class="footer__rate-img">
                                    <img src="./../assets/img/footer_01.png" alt="">
                                </div>

                                <div class="footer__rate-title">
                                    <h3>Chất lượng dẫn đầu</h3>
                                </div>

                                <div class="footer__rate-text">
                                    <p>Chú trọng khâu tuyển chọn đội ngũ đầu bếp chuyên nghiệp, thực đơn của Pizza
                                        Capichi
                                        luôn được đổi mới, đa dạng với pizza nhiều hương vị, sandwich, mỳ ý và các món
                                        ăn
                                        nhanh khác.</p>
                                </div>
                            </div>
                        </div>
                        <div class="footer__rate">
                            <div class="footer__rate-container">
                                <div class="footer__rate-img">
                                    <img src="./../assets/img/footer_02.png" alt="">
                                </div>

                                <div class="footer__rate-title">
                                    <h3>GIAO HÀNG ĐÚNG GIỜ</h3>
                                </div>

                                <div class="footer__rate-text">
                                    <p>Để tăng cường sự tin tưởng và yên tâm với khách hàng, Pizza Capichi cam kết luôn
                                        giao hàng đúng giờ và chi phí giao hàng rẻ nhất để đảm bảo khách hàng có thể
                                        nhận bánh trong thời gian nhanh nhất.</p>
                                </div>
                            </div>
                        </div>
                        <div class="footer__rate">
                            <div class="footer__rate-container">
                                <div class="footer__rate-img">
                                    <img src="./../assets/img/footer_03.png" alt="">
                                </div>

                                <div class="footer__rate-title">
                                    <h3>Pizza Take Away</h3>
                                </div>

                                <div class="footer__rate-text">
                                    <p>Lựa chọn cho mình một hướng đi mới để tạo nên sự khác biệt, mô hình Pizza take
                                        away - pizza mang đi giúp khách hàng tiết kiệm thời gian, đem đến sự tiện lợi
                                        tối ưu trong việc lựa chọn, thanh toán, đóng gói và nhận hàng.</p>
                                </div>
                            </div>
                        </div>
                        <div class="footer__rate">
                            <div class="footer__rate-container">
                                <div class="footer__rate-img">
                                    <img src="./../assets/img/footer_04.png" alt="">
                                </div>

                                <div class="footer__rate-title">
                                    <h3>Phục vụ chuyên nghiệp</h3>
                                </div>

                                <div class="footer__rate-text">
                                    <p>Pizza Capichi cùng với đội ngũ nhân viên mang đầy sức trẻ và nhiệt huyết, chúng
                                        tôi luôn mong muốn đem lại cho khách hàng của mình chất lượng dịch vụ tốt nhất,
                                        luôn lắng nghe và chăm sóc những nhu cầu dù là nhỏ nhất của Quý khách.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-2">
                <div class="grid ">
                    <div class="footer-info">
                        <div class="footer-info__logo">
                            <img src="./../assets/img/logo-order.5f3ca2a0.png" alt="">
                        </div>

                        <div class="footer-info__title">
                            <h4>Công ty TNHH Pizza Capichi Việt Nam</h4>
                        </div>

                        <div class="footer-info__text">
                            <p>Để đặt bánh pizza, vui lòng liên hệ tổng đài số: 024.36.888.777 <br>

                                Để phản ánh chất lượng dịch vụ, vui lòng gọi số: 0989.139.565 <br>

                                Email: lienhepizzaCapichi@gmail.com <br>

                                Chính sách bảo mật thông tin cá nhân <br>

                                Chính sách đổi/trả sản phẩm và hoàn tiền <br>

                                Chính sách thanh toán</p>
                        </div>

                        <div class="footer-info__line">
                            <img src="./../assets/img/footer_line.png" alt="">
                        </div>

                        <div class="footer-info__inner">
                            <div class="footer-info__inner-container">
                                <div class="footer-info__inner-content">
                                    <div class="footer-info__inner-img">
                                        <img src="./../assets/img/so_01.png" alt="">
                                    </div>
                                    <div class="footer-info__inner-title">
                                        <p>107 D3 Ngọc Khánh, Ba Đình</p>
                                    </div>
                                    <div class="footer-info__inner-button">
                                        <a href="./../contact/contact.html"> <i class="fas fa-location-arrow"></i> Xem
                                            trên bản đồ </a>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-info__inner-container">
                                <div class="footer-info__inner-content">
                                    <div class="footer-info__inner-img">
                                        <img src="./../assets/img/so_02.png" alt="">
                                    </div>
                                    <div class="footer-info__inner-title">
                                        <p>14 Ngõ 497 Nguyễn Trãi, Thanh Xuân</p>
                                    </div>
                                    <div class="footer-info__inner-button">
                                        <a href="./../contact/contact.html"> <i class="fas fa-location-arrow"></i> Xem
                                            trên bản đồ </a>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-info__inner-container">
                                <div class="footer-info__inner-content">
                                    <div class="footer-info__inner-img">
                                        <img src="./../assets/img/so_03.png" alt="">
                                    </div>
                                    <div class="footer-info__inner-title">
                                        <p>6 Đồng Bát, Cầu Giấy</p>
                                    </div>
                                    <div class="footer-info__inner-button">
                                        <a href="./../contact/contact.html"> <i class="fas fa-location-arrow"></i> Xem
                                            trên bản đồ </a>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-info__inner-container">
                                <div class="footer-info__inner-content">
                                    <div class="footer-info__inner-img">
                                        <img src="./../assets/img/so_04.png" alt="">
                                    </div>
                                    <div class="footer-info__inner-title">
                                        <p>52 Kim Đồng, Hoàng Ma</p>
                                    </div>
                                    <div class="footer-info__inner-button">
                                        <a href="./../contact/contact.html"> <i class="fas fa-location-arrow"></i> Xem
                                            trên bản đồ </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="footer-info__confirm">
                            <p style="text-align: center; margin: 30px 0 10px 0;">
                                <a href="">
                                    <img src="./../assets/img/confirm.png" alt="" width="150" height="57" />
                                </a>
                            </p>
                            <p style="text-align: center; color: #aaa; line-height: 2rem;">
                                <span style="font-size: 1.2rem; margin: 5px 0;">Công ty TNHH Pizza Capichi Việt
                                    Nam</span><br>
                                <span style="font-size: 1.2rem; margin: 5px 0;">Địa Chỉ: Tòa nhà FPT Polytechnic, Phố
                                    Trịnh Văn Bô, Nam Từ Liêm, Hà Nội</span><br>
                                <span style="font-size: 1.2rem; margin: 5px 0;">Số điện thoại: 0374069452<br>
                                    Email:&nbsp;
                                    <a style="color: #aaa;" href="">duongldph15278@gmail.com</a>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="./../assets/js/index.js"></script>
    <script src="./../assets/js/thanhtoan.js"></script>
</body>

</html>