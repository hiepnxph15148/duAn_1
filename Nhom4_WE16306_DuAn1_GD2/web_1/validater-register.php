<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng ký</title>
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
        <h3 class="heading">Đăng ký thành viên </h3>

        <div class="spacer"></div>

        <div class="form-group">
          <label for="fullname" class="form-label">Tên đầy đủ</label>
          <input id="fullname" name="fullname" type="text" placeholder="VD: Lê Dương" class="form-control" >
          <span id="erro1" class="form-message"></span>
        </div>

        <div class="form-group">
          <label for="email" class="form-label">Email</label>
          <input id="email" name="email" type="text" placeholder="VD: email@domain.com" class="form-control">
          <span id="erro2" class="form-message"></span>
        </div>

        <div class="form-group">
          <label for="password" class="form-label">Mật khẩu</label>
          <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" class="form-control">
          <span id="erro3" class="form-message"></span>
        </div>

        <div class="form-group">
          <label for="password_confirmation" class="form-label">Nhập lại mật khẩu</label>
          <input id="password_confirmation" name="password_confirmation" placeholder="Nhập lại mật khẩu" type="password"
            class="form-control">
          <span id="erro4" class="form-message"></span>
        </div>

        <div class="form-group">
          <p>Thông qua việc đăng ký, bạn xác nhận rằng bạn đồng ý với <a class="rules" href="#">Điều khoản sử dụng</a> và đã đọc, hiểu
            <a class="rules" href="#">Chính sách Quyền riêng tư</a> của chúng tôi.</p>
        </div>

        <button name="btn" class="form-submit">Đăng ký</button>
        
        <hr class="hr-text" data-content="Hoặc">
      
        <div class="validater-switch" style="width: 100%; text-align: center;">
          <span class="label-account">Bạn đã có tài khoản?</span>
          <a href="./validater-login.php" class="btn-switch">Đăng nhập</a>
        </div>
      
      </form>
  <?php
    include 'db.php';
    if(isset($_POST['btn'])){
      $fullname=$_POST['fullname'];
      $password=$_POST['password'];
      $email=$_POST['email'];
      $passwordcf=$_POST['password_confirmation'];
      if($fullname==""){
        ?>
            <script>
              document.getElementById("erro1").style.color="red";
              document.getElementById("erro1").innerText="Bạn phải điền tên đầy đủ tên!";
            </script>
        <?php
      }else if($email==""){
        ?>
            <script>
              document.getElementById("erro2").style.color="red";
              document.getElementById("erro2").innerText="Bạn phải điền đầy đủ email!";
            </script>
        <?php
      }else if($password==""){
        ?>
            <script>
              document.getElementById("erro3").style.color="red";
              document.getElementById("erro3").innerText="Bạn phải điền mật khẩu!";
            </script>
        <?php
      }else if($password!=$passwordcf){
        ?>
            <script>
              document.getElementById("erro4").style.color="red";
              document.getElementById("erro4").innerText="Mật khẩu không khớp!";
            </script>
        <?php
      }else{
        $sql="insert into tk values(null, '$fullname', '$password', '$email', '0', '0')";
            $kq=$con->exec($sql);
            if($kq==1){
              ?>
                  <script>
                    alert("Bạn đẫ đăng ký thành công");
                  </script>
              <?php
            }

      }


            
    }
  ?>
      </script>
      
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
          Validator.isEmail('#email'),
          Validator.minLength('#password', 6),
          Validator.isRequired('#password_confirmation'),
          Validator.isConfirmed('#password_confirmation', function () {
            return document.querySelector('#form-1 #password').value;
          }, 'Mật khẩu nhập lại không chính xác')
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