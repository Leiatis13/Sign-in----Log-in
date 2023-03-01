<?php
    session_start();
    include 'config.php';
    if( isset($_POST["signin"]) ) {
        header("location: register.php");
    } else {
        if( isset($_POST["submit"]) && $_POST["username"] != '' && $_POST["password"] != ''){
            $username = $_POST["username"];
            $password = $_POST["password"];
            $sql = "SELECT * FROM user WHERE username='$username' AND password='$password' ";
            $user = mysqli_query($conn,$sql);
            if (mysqli_num_rows($user) > 0) {
                $_SESSION["user"] = $username;
                header("location: index.php");
            } else {
                $_SESSION["thongbao"] = "sai tên đăng nhập hoặc mặt khẩu";
                echo "Bạn nhập sai tên đăng nhập hoặc mật khẩu";
            }
        } else {
            $_SESSION["thongbao"] = "Vui lòng nhập đầy đủ thông tin";
            header('location: login.php');
        }
    }
?>