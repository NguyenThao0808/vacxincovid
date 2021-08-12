<?php
    session_start();
    //kết nối đến server
    $conn = mysqli_connect("localhost", "root", "", "vacxincovid") or die ("lỗi kết nối đến server");
    //truy vấn dữ liệu
    $qr = mysqli_query($conn,"SELECT * FROM chitiettiemchung c INNER JOIN nguoidung n ON c.id = n.id") 
            or die("lỗi câu truy vấn select");
    
   
?>
<style>
    body{
        background-color: pink;
    }
    h1{
        margin-bottom: 100px;
        margin-top: 50px;
    }
    table{
        text-align: center;
    }
    .link{
        word-spacing: 5px;
    }
</style>
<center>
<h1>DANH SÁCH TIÊM CHỦNG</h1>
<table border = '1' cellspacing = '0' width = "80%">
    <tr>
        <th>STT</th>
        <th>Họ tên</th>
        <th>Nơi tiêm</th>
        <th>Ưu tiên</th>
        <th>Ngày giờ</th>
        <th>Action</th>
    </tr>
    <?php
        $i = 1;
        while($rs = mysqli_fetch_array($qr))
        {
            echo "<tr>";
            echo "<td>".$i."</td>";//số thứ tự
            echo "<td>".$rs["HoTen"]."</td>";
            echo "<td>".$rs["noitiem"]."</td>";
            echo "<td>".$rs["uutien"]."</td>";
            echo "<td>".$rs["ngaygio"]."</td>";
            echo "<td class = 'link'><a href='danhmuc/add.php'>Thêm</a> | <a href = 'danhmuc/update.php?id=".$rs['id']."'>Sửa</a> | <a href = 'danhmuc/delete.php?id=".$rs['id']."'>Xóa</a></td>";
            echo "</tr>";
            $i++;
        }
    ?>
</table>
</center>