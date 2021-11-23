<?php
session_start();
session_destroy();
header("location:../customer/admin_login.php");
?>