<?php
    include "connect.php";
    if(isset($_POST['submit']) && $_POST['username'] != '' 
                && $_POST['password'] != '' && $_POST['repassword'] != '')
        {
            //thực hiện xử lý khi người dùng ấn nút submit và người dùng điền đầy đủ thông tin
            $username = $_POST['username'];
            $password = $_POST['password'];
            $repassword = $_POST['repassword'];
            $hoten = $_POST['hoten'];
            //nếu nhập lại mật khẩu không đúng
            if($password != $repassword)
            {
                header("location:register.php");
                return;
            }
            //nếu tên đăng nhập đã tồn tại
            $sql = "SELECT id FROM nguoidung WHERE username = '$username'";
            $old = mysqli_query($conn,$sql);
            $rs = mysqli_fetch_array($old);
            $password = md5($password);
            if(mysqli_num_rows($old) >0)
            {
                header("location:register.php");
                return;
            }
            //thêm dữ liệu vào bảng người dùng
            $sql = "INSERT INTO nguoidung (username, password, HoTen)
                    VALUES('$username', '$password', '$hoten')";
            mysqli_query($conn, $sql);
            echo "Đã đăng ký thành công!";
            //$id = $rs['id'];
            //$qr = mysqli_query($conn,"INSERT INTO chitiettiemchung(id) 
                                //VALUES('$id')") ;
            //header("location: quanly.php");
        }
    else
        header("location:register.php");
?>