<?php
    session_start();
    if( !isset($_SESSION["user"]) ) {
        header("location: login.php");
    }
?>
<h1>Bạn đã dadwngnhaapj thành công</h1>
<a href="logout.php" title="Logout">Logout</a>