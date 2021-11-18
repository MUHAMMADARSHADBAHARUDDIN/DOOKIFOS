<?php session_start();
$u = $_POST['uid'];
$p = $_POST['pass'];
$p = md5($p);
include  "connect.php";
$s = mysqli_query($con,"select * from admin where adminid='$u' and password='$p'");

if($r = mysqli_fetch_array($s))
{
		$_SESSION['uid'] = $u;
		header("location:admin/after_login.php");
}
else
{
		echo "<script>alert('Invalid Username/Password');</script>";
		include "admin_login.php";
}
?>