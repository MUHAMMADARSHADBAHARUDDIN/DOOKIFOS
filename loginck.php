<?php session_start();


$u = $_POST['uid'];
$p = $_POST['pass'];
include  "connect.php";
$s = mysqli_query($con,"select * from registration where userid='$u' and password='$p'");

if($r = mysqli_fetch_array($s))
{
		$_SESSION['uid'] = $u;
		header("location:index.php");

}
else
{
	echo "<script>alert('Invalid Username/Password');</script>";
	include "login.php";
}

?>