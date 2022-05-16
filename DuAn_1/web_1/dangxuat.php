<?php
    session_start();
    unset($_SESSION['tentk']);
    session_destroy();
    header("Location:../index.php");
?>