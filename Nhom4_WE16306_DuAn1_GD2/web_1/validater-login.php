<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng Nhập</title>
  <link rel="stylesheet" href="./../assets/css/validater.css">
  <script src="./../assets/js/validater.js"></script>
  <link rel="stylesheet" href="./../assets/fonts/fontawesome-free-5.15.4-web/css/all.min.css">
</head>

<body>
  <div class="background" style="background-image: url(./../assets/img/login-background.591c777f.jpg);">
    <div class="back_home">
      <a href="../index.php">
        <i class="fas fa-angle-left"></i>  
        <img src="./../assets/img/logo-order.5f3ca2a0.png" alt="">
      </a>
    </div>
    <div class="main">
      <form action="" method="POST" class="form" id="form-1">
        <h3 class="heading">Đăng nhập </h3>

        <div class="spacer"></div>

        <div class="form-group">
          <label for="fullname" class="form-label">Tên tài khoản</label>
          <input type="text" name="tk" class="form-control">
          <!-- <input id="fullname" name="tk" type="text" placeholder="VD: Lê Dương 69" class="form-control"> -->
          <span id="loi" class="form-message"></span>
        </div>

        <div class="form-group">
          <label for="password" class="form-label">Mật khẩu</label>
          <input type="password" class="form-control" id="pass" name="pass">
          <!-- <input id="password" name="pass" type="password" placeholder="Nhập mật khẩu" class="form-control"> -->
          <span id="erro2" class="form-message"></span>
        </div>

        <div class="form-group">
          <p>Thông qua việc đăng ký, bạn xác nhận rằng bạn đồng ý với <a class="rules" href="#">Điều khoản sử dụng</a> và đã đọc, hiểu
            <a class="rules" href="#">Chính sách Quyền riêng tư</a> của chúng tôi.</p>
        </div>

        <button name="btn" class="form-submit">Đăng nhập</button>
        
        <hr class="hr-text" data-content="Hoặc">
      
        <div class="validater-switch" style="width: 100%; text-align: center;">
          <span class="label-account">Bạn chưa có tài khoản?</span>
          <a href="./validater-register.php" class="btn-switch">Đăng Ký</a>
        </div>

      </form>
      <?php 
        include 'db.php';
        if(isset($_POST['btn'])){
          $tk=$_POST['tk'];
          $mk=$_POST['pass'];
          if($tk==""){
            ?>
            <script>
                document.getElementById("loi").style.color="red";
                // document.getElementById("tk").style.border="blue";
                document.getElementById("loi").innerText="Bạn phải điền tên đăng nhập!";
              // alert("abv")
            </script>
          <?php
          }elseif($mk==""){
            ?>
                <script>
                  document.getElementById("erro2").style.color="red";
                  // document.getElementById("pass").style.border="blue";
                  document.getElementById("erro2").innerText="Bạn phải điền mật khẩu!";
                </script>
            <?php
          }else {
            $sql="select * from tk where user='$tk' and pass='$mk'";
            $kq=$con->query($sql);
            if($kq->rowCount()==1){
              $_SESSION['tentk']=$tk;
              header("Location:../index.php");
            }else{
              ?>  
              <script>
                document.getElementById("erro2").style.color="red";
                // document.getElementById("pass").style.border="blue";
                document.getElementById("erro2").innerText="Tài khoản hoặc mật khẩu của bạn không đúng!";
              </script>
                  
              <?php

            }
          }
          
        }
      ?>

    </div>
  </div>
  <!-- <script>

    document.addEventListener('DOMContentLoaded', function () {
      // Mong muốn của chúng ta
      Validator({
        form: '#form-1',
        formGroupSelector: '.form-group',
        errorSelector: '.form-message',
        rules: [
          Validator.isRequired('#fullname', 'Vui lòng nhập tên đầy đủ của bạn'),
          Validator.minLength('#password', 6),
          Validator.isRequired('#password_confirmation')
        ],
        onSubmit: function (data) {
          // Call API
          console.log(data);
        }
      });
    });

  </script> -->
</body>

</html>