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
    .them{
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
<h1>Thêm danh mục</h1>
<form action="xl_add.php" method = "post">
    <table>
        <tr>
            <td class = "dong1">Mã đăng ký:</td>
            <td class = "dong1"><input type="text" name = "id"></td>
        </tr>
        <tr>
            <td class = "dong2">Nơi tiêm:</td>
            <td class = "dong2"><input type="text" name = "noitiem"></td>
        </tr>
        <tr>
            <td class = "dong3">Ưu tiên:</td>
            <td class = "dong3"><input type="text" name = "uutien"></td>
        </tr>
        <tr>
            <td class = "dong4">Ngày giờ:</td>
            <td class = "dong4"><input type="text" name = "ngaygio"></td>
        </tr>
        <tr>
            <td colspan = "2"><input type="submit" value = "Thêm" class = "them"></td>
        </tr>
    </table>
</form>
</center>