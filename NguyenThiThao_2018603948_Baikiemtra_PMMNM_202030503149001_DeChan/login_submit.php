<?php
    session_start();
    include "connect.php";
    if(isset($_POST['dangnhap']))
    {
        header("location:login.php");
    }
    if(isset($_POST['submit']) && $_POST['username'] != '' && $_POST['password'] != '')
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password = md5($password);
        $sql = "SELECT * FROM nguoidung WHERE username = '$username' and password = '$password'";
        $user = mysqli_query($conn, $sql);
        if(mysqli_num_rows($user) >0 )
        {
            if($username == "admin")
                header("location:quanly.php");
            else
                echo "Đã đăng nhập thành công";
        }
        else
            header("location:login.php");
    }
    else
        header("location:login.php");
?>