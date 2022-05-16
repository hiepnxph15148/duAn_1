<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

    <!-- Link CSS -->
    <link rel="stylesheet" href="./../assets/css/base.css">
    <link rel="stylesheet" href="./../assets/css/blog.css">
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
                            <li>
                                <a href="./../form-validation/validater-register.html" class="validater-item">Đăng ký</a>
                            </li>
                            <li>
                                <a href="./../form-validation/validater-login.html" class="validater-item">Đăng nhập</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Giỏ Hàng</h5>
                            <span class="close">&times;</span>
                        </div>
                        <div class="modal-body">
                            <div class="cart-row">
                                <span class="cart-item cart-header cart-column">Sản Phẩm</span>
                                <span class="cart-price cart-header cart-column">Giá</span>
                                <span class="cart-quantity cart-header cart-column">Số Lượng</span>
                            </div>
                            <div class="cart-items">
    
                            </div>
                            <div class="cart-total">
                                <strong class="cart-total-title">Tổng Cộng:</strong>
                                <span class="cart-total-price">0VNĐ</span>
                            </div>
                        </div>
    
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary close-footer">Đóng</button>
                            <button type="button" class="btn btn-primary order">Thanh Toán</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="./../../web_1/index.html"><p>Trang Chủ</p></a></li>
                    <li><a href="./../blog/blog.html"><p>Blog</p></a></li>
                    <li><a href="./../contact/contact.html"><p>Liên hệ</p></a></li>
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
                                 <a href="#">Trang chủ</a> / <a href="./blog.html">Blog</a> 
                            </span>
                        </span>
                    </div> 		
                </div>
            </div>
        </section>

        <div id="content">
            <div class="grid">
                <div class="archive">
                    <div class="archive_content">
                        <h3 class="archive_content-heading">Các bài viết tiêu biểu</h3>
                        <div class="archive_item">
                            <div class="archive_img">
                                <a href="./details-blog_1.html">
                                    <img src="./../assets/img/blog2.jpeg" alt="">
                                </a>
                            </div>

                            <div class="archive_heading">
                                <h3>
                                    <a href="./details-blog_1.html">Lý Do Khiến Công Việc Của Người Thợ Làm Bánh Pizza Luôn Bền Vững
                                    </a>
                                </h3>
                                <span>Nước Ý được biết đến nhiều với phong cảnh nên thơ và nền văn hoá ẩm thực tuyệt
                                    vời. Nhắc tới nước Ý thì không thể không nhắc tới món ăn trứ danh của Ý</span>
                            </div>

                            <a href="./details-blog_1.html" class="archive_chitiet">
                                Xem chi tiểt
                            </a>
                        </div>
                        <div class="archive_item">
                            <div class="archive_img">
                                <a href="./details-blog_2.html">
                                    <img src="./../assets/img/blog3.jpg" alt="">
                                </a>
                            </div>

                            <div class="archive_heading">
                                <h3>
                                    <a href="./details-blog_2.html">Những Thông Tin Khiến Bạn Bất Ngờ Về Biểu Tượng Ẩm Thực Italy</a>
                                </h3>
                                <span>Lượng tiêu thụ khủng khiếp về số lượng bánh Pizza được tiêu thụ ở Italy khiến
                                    nhiều người phải trầm trồ. Hôm nay hãy cùng Pizza Capichi đi tìm hiểu về số
                                    lượng</span>
                            </div>

                            <a href="./details-blog_2.html" class="archive_chitiet">
                                Xem chi tiểt
                            </a>
                        </div>
                        <div class="archive_item">
                            <div class="archive_img">
                                <a href="./details-blog_3.html">
                                    <img src="./../assets/img/blog4.jpg" alt="">
                                </a>
                            </div>

                            <div class="archive_heading">
                                <h3>
                                    <a href="./details-blog_3.html">Chuyên Mục Ẩm Thực Mỹ – Món Hàu Có Gì Đặc Biệt?</a>
                                </h3>
                                <span>Để nói về sự phong phóng hay giàu có trong ẩm thực thì Mỹ không được đánh giá cao
                                    dù trong ẩm thực châu Âu hay châu Á. Tuy nhiên, cũng không thể bỏ qua</span>
                            </div>

                            <a href="./details-blog_3.html" class="archive_chitiet">
                                Xem chi tiểt
                            </a>
                        </div>
                        <ul class="pagination home-product__pagination">
                            <li class="pagination-item">
                                <a href="#" class="pagination-item__link">
                                    <i class="pagination-item__icon fas fa-angle-left"></i>
                                </a>
                            </li>
                            <li class="pagination-item pagination-item--active">
                                <a href="#" class="pagination-item__link ">1</a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-item__link">2</a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-item__link">3</a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-item__link">4</a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-item__link">5</a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-item__link">...</a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-item__link">14</a>
                            </li>
                            <li class="pagination-item">
                                <a href="#" class="pagination-item__link">
                                    <i class="pagination-item__icon fas fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="archive_widget">
                        <div class="archive_widget-all">
                            <h3 class="widget-title">BÀI VIẾT KHÁC</h3>
                            <ul>
                                <li class="wview_item">
                                    <div class="wview_thumb">
                                        <img width="100%" src="./../assets/img/blog2.jpeg">
                                    </div>
                                    <div class="wview_text">
                                        <h3><a href="./details-blog_1.html" title="Pizza blog">Lý Do Khiến Công Việc Của Người Thợ
                                                Làm Bánh Pizza Luôn Bền Vững</a></h3>
                                        <span>05-11-2021</span>
                                    </div>
                                </li>
                                <li class="wview_item">
                                    <div class="wview_thumb">
                                        <img width="100%" src="./../assets/img/blog3.jpg">
                                    </div>
                                    <div class="wview_text">
                                        <h3><a href="./details-blog_2.html" title="Pizza blog">Những Thông Tin Khiến Bạn Bất Ngờ Về
                                                Biểu Tượng Ẩm Thực Italy</a></h3>
                                        <span>10-11-2021</span>
                                    </div>
                                </li>
                                <li class="wview_item">
                                    <div class="wview_thumb">
                                        <img width="100%" src="./../assets/img/blog4.jpg">
                                    </div>
                                    <div class="wview_text">
                                        <h3><a href="./details-blog_3.html" title="Pizza blog">Chuyên Mục Ẩm Thực Mỹ – Món Hàu Có Gì
                                                Đặc Biệt?</a></h3>
                                        <span>12-11-2021</span>
                                    </div>
                                </li>
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
                                        <a href="./../contact/contact.html"> <i class="fas fa-location-arrow"></i> Xem trên bản đồ </a>
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
                                        <a href="./../contact/contact.html"> <i class="fas fa-location-arrow"></i> Xem trên bản đồ </a>
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
                                        <a href="./../contact/contact.html"> <i class="fas fa-location-arrow"></i> Xem trên bản đồ </a>
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
                                        <a href="./../contact/contact.html"> <i class="fas fa-location-arrow"></i> Xem trên bản đồ </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="footer-info__confirm">
                            <p style="text-align: center; margin: 30px 0 10px 0;">
                                <a href="">
                                    <img src="./../assets/img/confirm.png" alt="" width="150" height="57"/>
                                </a>
                            </p>
                            <p style="text-align: center; color: #aaa; line-height: 2rem;">
                                <span style="font-size: 1.2rem; margin: 5px 0;">Công ty TNHH Pizza Capichi Việt Nam</span><br>
                                <span style="font-size: 1.2rem; margin: 5px 0;">Địa Chỉ: Tòa nhà FPT Polytechnic, Phố Trịnh Văn Bô, Nam Từ Liêm, Hà Nội</span><br>
                                <span style="font-size: 1.2rem; margin: 5px 0;">Số điện thoại: 0374069452<br> Email:&nbsp;
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