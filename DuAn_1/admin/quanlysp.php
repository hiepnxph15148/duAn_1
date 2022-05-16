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
            font-family: Arial, Helvetica, sans-serif;
            color:rgb(248, 248, 248);
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
            float: right;
        }
        .table h2{
            margin:50px 50px;
            font-size:30px;
            color:tomato;
        }
        table{
            margin: 50px 50px;
        }
        button{
            
            padding: 5px 15px;
            background-color: rgb(95, 95, 196);
            border:none;
        }
        .add{
            margin: 0px 0px 30px 50px;
            padding: 10px 25px;
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

        }
        td{
            font-family: Arial, Helvetica, sans-serif;
            text-align:center;
            padding:10px 0px;
        }
        img{
            margin: 20px 30px;
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
            <table>
                <tr class="daubai">
                    <td style="width:20px;">ID</td>
                    <td style="width:250px">Tên</td>
                    <td style="width:150px">Ảnh</td>
                    <td style="width:130px">Giá</td>
                    <td style="width:250px">Thông tin chi tiết</td>
                    <td style="width:80px">Sửa</td>
                    <td>Xóa</td>
                    
                </tr>
                <tr>
                    <td colspan="7"><div class="ngan"></div></td>
                </tr>

                
                <?php
                    include '../web_1/db.php';
                    $sql="select * from sanpham";
                    $kq=$con->query($sql);
                    foreach($kq as $key => $value){
                        ?>
                        
                         <tr>
                            <td><?php echo $value['id_sp'] ?></td>
                            <td><?php echo $value['tensp'] ?></td>
                            <td><img width=100 src="../web_1/picture/<?php echo $value['anhdd'] ?>" alt=""></td>
                            <td><?php echo number_format($value['giasp'],0,',','.') ?> VND</td>
                            <td><?php echo $value['ttsp'] ?></td>
                            <td><button><a href="fixsp.php?ma=<?php echo $value['id_sp'] ?>">Sửa</a></button></td>
                            <td><button><a href="delete.php?maxoa=<?php echo $value['id_sp'] ?>" onclick="return Del('<?php echo $value['tensp'] ?>')">Xóa</a></button></td>
                        </tr>
                        <tr>
                    <td colspan="7"><hr></td>
                </tr>

                        <?php
                    }
                ?>
            </table>
            <button class="add"><a href="addsp.php">Thêm sản phẩm</a></button>
                </div>
                
    </section>
    <script>
        function Del(name){
            return confirm("Bạn có muốn xóa sản phẩm: " + name + "?");
        }
    </script>
    
</body>
</html>