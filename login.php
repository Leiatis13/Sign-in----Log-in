<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dang nhap</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <h3>Đăng nhập</h3>
    <p>
        <?php
            if( isset($_SESSION["thongbao"]) ) {
                echo $_SESSION["thongbao"];
                session_unset();
            }
        ?>
    <form action="login_submit.php" method="POST">
        <table>
            <tr>
                <!-- <td>Username</td> -->
                <td><input type="text" name="username" placeholder="Tên đăng nhập"></td>
            </tr>
            <tr>
                <!-- <td>Password</td> -->
                <td><input type="password" name="password" placeholder="Mật khẩu"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="submit">Login</button>
                    <button type="reset">Reset</button>
                    <button type="submit" name="signin">Tạo tài khoản mới</button>
                </td>
        </table>
    </form>
</body>
</html>