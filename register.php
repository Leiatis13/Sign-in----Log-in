<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Đăng kí thành viên</title>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
    <h3>Đăng kí thành viên</h3>
    <p>
        <?php
            if( isset($_SESSION["thongbao"]) ) {
                echo $_SESSION["thongbao"];
                session_unset();
            }
        ?>
    </p>
    <form action="register_submit.php" method="POST">
        <table>
            <tr>
                <!-- <td>Tên đăng nhập</td> -->
                <td><input type="text" name="username" placeholder="Tên đăng nhập"></td>
            </tr>
            <tr>
                <!-- <td>Mật khẩu</td> -->
                <td><input type="password" name="password" placeholder="Mật khẩu"></td>
            </tr>
            <tr>
                <!-- <td>Nhập lại mặt khẩu</td> -->
                <td><input type="password" name="repassword" placeholder="Nhập lại mặt khẩu"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="submit">Đăng kí</button>
                    <button type="reset">Làm mới</button>
                    <button type="submit" name="login">Đã có tài khoản</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>