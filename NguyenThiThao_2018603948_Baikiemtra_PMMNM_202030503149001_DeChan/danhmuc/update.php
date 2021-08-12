<?php
    $id = $_GET['id'];
    //kết nối đến server
    $conn = mysqli_connect("localhost", "root", "", "vacxincovid") or die ("lỗi kết nối đến server");
    //truy vấn dữ liệu
    $qr = mysqli_query($conn,"SELECT * FROM chitiettiemchung WHERE id = '$id'") 
        or die("lỗi câu truy vấn insert");
    //gán kết quả truy vấn thành mảng
    $rs = mysqli_fetch_array($qr);
    //print_r($rs);
    
?>
<style>
    body{
        background-color: pink;
    }
    h1{
        margin-bottom: 100px;
        margin-top: 50px;
    }
    .dong1{
        padding-bottom: 30px;
        font-size: 20px;
    }
    .dong2{
        padding-bottom: 30px;
        font-size: 20px;
    }
    .dong3{
        padding-bottom: 30px;
        font-size: 20px;
    }
    .dong4{
        padding-bottom: 30px;
        font-size: 20px;
    }
    input{
        width:300px;
        height: 50px;
    }
    .update{
        width: 100%;
        height: 50px;
        font-size: 24px;
        font-weight: bold;
        color: white;
        background-color: rgb(188,1,42);
        font-family:  "Times New Roman";
    }
</style>
<center>
<h1>Cập nhật danh mục</h1>
<form action="xl_update.php" method = "post">
    <input type="hidden" name = "id" value="<?php echo $id; ?>">
    <table>
    <tr>
            <td class = "dong1">Mã đăng ký:</td>
            <td class = "dong1"><input type="text" name = "id" value="<?php echo $rs['id']; ?>"></td>
        </tr>
        <tr>
            <td class = "dong2">Nơi tiêm:</td>
            <td class = "dong2"><input type="text" name = "noitiem" value="<?php echo $rs['noitiem']; ?>"></td>
        </tr>
        <tr>
            <td class = "dong3">Ưu tiên:</td>
            <td class = "dong3"><input type="text" name = "uutien" value="<?php echo $rs['uutien']; ?>"></td>
        </tr>
        <tr>
            <td class = "dong4">Ngày giờ:</td>
            <td class = "dong4"><input type="text" name = "ngaygio" value="<?php echo $rs['ngaygio']; ?>"></td>
        </tr>
        <tr>
            <td colspan = "2"><input type="submit" value = "Cập nhật" class = "update"></td>
        </tr>
    </table>
</form>
</center>