<?php
    $id = $_GET['id'];
    //kết nối đến server
    $conn = mysqli_connect("localhost", "root", "", "vacxincovid") or die ("lỗi kết nối đến server");
    //truy vấn dữ liệu
    $qr = mysqli_query($conn,"DELETE FROM chitiettiemchung WHERE id = '$id'") 
        or die("lỗi câu truy vấn delete");
    if($qr)
    {
        header("location: ../quanly.php");
    }
?>