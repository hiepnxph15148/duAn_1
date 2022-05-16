<?php
    session_start();
    include 'db.php';
    if(isset($_GET['maxoa'])){
        $maxoa=$_GET['maxoa'];
        $tentk=$_SESSION['tentk'];
        $sqltk="select * from tk where user= '$tentk'";
        $kqtk=$con->query($sqltk)->fetch();
        $idtk=$kqtk['id_tk'];
        $sql="delete from gio_hang where trangthai='0' and  id_gh='$maxoa'";
        $kq=$con->prepare($sql);
        if($kq->execute()){
            header("Location:giohang.php?idtk=$idtk");
        }else {
            echo "Không xóa được";
        }
    }
?>
<!-- <input type="text" value="<?php echo $idtk ?>"> -->