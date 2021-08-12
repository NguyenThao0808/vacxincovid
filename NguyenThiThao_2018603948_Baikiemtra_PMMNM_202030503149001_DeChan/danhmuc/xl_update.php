<?php
    $id = $_POST['id'];
    $noitiem = $_POST['noitiem'];
    $uutien = $_POST['uutien'];
    $ngaygio = $_POST['ngaygio'];
    //kết nối đến server
    $conn = mysqli_connect("localhost", "root", "", "vacxincovid") or die ("lỗi kết nối đến server");
    //truy vấn dữ liệu
    $qr = mysqli_query($conn,"UPDATE chitiettiemchung SET id = '$id', noitiem = '$noitiem', uutien = '$uutien', 
                                ngaygio = '$ngaygio'
                             WHERE id  = '$id'") 
        or die("lỗi câu truy vấn insert");
    if($qr)
    {
        header("location: ../quanly.php");
    }
?>