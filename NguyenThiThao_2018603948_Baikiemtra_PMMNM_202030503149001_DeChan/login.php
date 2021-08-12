<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
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
    input{
        width:300px;
        height: 50px;
    }
    .dangnhap{
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
    <h1>ĐĂNG NHẬP</h1>
    <form action="login_submit.php" method = "post">
        <table>
            <tr>
                <td class = "dong1">Tên đăng nhập: </td>
                <td class = "dong1"><input type="text" name = "username"></td>
            </tr>
            <tr>
                <td class = "dong2">Mật khẩu: </td>
                <td class = "dong2"><input type="password" name = "password"></td>
            </tr>
            <tr>
                <td colspan = "2">
                    <button type = "submit" name = "submit" class = dangnhap>Đăng nhập</button>
                </td>
            </tr>
            <tr>
                <td colspan = "2" align = "center">
                    <span>Chưa có tài khoản?</span><a href="register.php">Đăng ký</a>
                </td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>