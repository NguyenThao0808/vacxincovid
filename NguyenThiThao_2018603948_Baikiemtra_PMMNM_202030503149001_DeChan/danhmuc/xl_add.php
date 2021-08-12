<?php
    $id = $_POST['id'];
    $noitiem = $_POST['noitiem'];
    $uutien = $_POST['uutien'];
    $ngaygio = $_POST['ngaygio'];
    //kết nối đến server
    $conn = mysqli_connect("localhost", "root", "", "vacxincovid") or die ("lỗi kết nối đến server");
    //truy vấn dữ liệu
    $qr = mysqli_query($conn,"INSERT INTO chitiettiemchung(id, noitiem, uutien, ngaygio) 
                                VALUES('$id', '$noitiem', '$uutien', '$ngaygio')") 
        or die("lỗi câu truy vấn insert");
    if($qr)
    {
        header("location: ../quanly.php");
    }
?>