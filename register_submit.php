<?php
session_start();
include 'config.php';
if( isset($_POST["login"]) ) {
    header("location: login.php");
} else {
    if (isset($_POST['submit']) && $_POST["username"] != '' && $_POST["password"] != '' && $_POST["repassword"] != '') {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $repassword = $_POST["repassword"];
        if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
            $_SESSION["thongbao"] = "Username phải là định dạng email";
            header("location: register.php");
            die();
        }
        if ($password != $repassword) {
            $_SESSION["thongbao"] = "Password không chính xác";
            header("location: register.php");
            die();
        }
        $sql = "SELECT * FROM user WHERE username='$username'";
        $old = mysqli_query($conn, $sql);
        //$password = md5($password);
        if (mysqli_num_rows($old) > 0) {
            $_SESSION["thongbao"] = "Username đã tồn tại";
            header("location: register.php");
            die();
        }
        // Insert new user into database
        $insert_query = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
        mysqli_query($conn, $insert_query);
        $_SESSION["thongbao"] = "Đã đăng kí thành công";
        header('location:login.php');
        
    } else {
        $_SESSION["thongbao"] = "Vui lòng nhập đủ thông tin";
        header("location: register.php");
    }
}

?>
