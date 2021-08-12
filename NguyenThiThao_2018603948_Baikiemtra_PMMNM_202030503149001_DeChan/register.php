<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký thành viên</title>
</head>
<style>
    body{
        background-color: pink;
    }
    h1{
        margin-bottom: 70px;
        margin-top: 50px;
    }
    .dong0{
        padding-bottom: 30px;
        font-size: 20px;
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
    input{
        width:300px;
        height: 50px;
    }
    .dangky{
        width: 100%;
        height: 50px;
        font-size: 24px;
        font-weight: bold;
        color: white;
        background-color: rgb(188,1,42);
        font-family:  "Times New Roman";
    }
</style>
<body>
    <center>
    <h1 class = "h1">ĐĂNG KÝ THÀNH VIÊN</h1>
    <form action="register_submit.php" method = "post" class = "form">
        <table cellspacing = "10px">
            <tr>
                <td class = "dong0" align = "right">Họ tên: </td>
                <td class = "dong0"><input type="text" name = "hoten"> </td>
            </tr>
            <tr>
                <td class = "dong1" align = "right">Tên đăng nhập: </td>
                <td class = "dong1"><input type="text" name = "username"> </td>
            </tr>
            <tr >
                <td class = "dong2" align = "right">Mật khẩu: </td>
                <td class = "dong2"><input type="password" name = "password"> </td>
            </tr>
            <tr class = "dong3">
                <td class = "dong3" align = "right">Nhập lại mật khẩu: </td>
                <td class = "dong3"><input type="password" name = "repassword"> </td>
            </tr>
            <tr>
                <td colspan = "2">
                    <button type = "submit" name = "submit" class = "dangky">Đăng ký</button>
                </td>
            </tr>
            <tr>
                <td colspan = "2" align = "center">
                    <span>Đã có tài khoản?</span><a href = "login.php">Đăng nhập</a>
                </td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>