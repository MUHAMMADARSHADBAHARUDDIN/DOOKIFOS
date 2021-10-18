<?php
function getListOfCustomer()
{
 $con = mysqli_connect("localhost","root","","dookki_db");
	if(!$con)
		{
		echo mysqli_error();
		}
	else
	{
		$sql='select * from registration';
		$qry=mysqli_query($con,$sql);
		return $qry;
	}
}
function searchByCustomerId()
{
$con = mysqli_connect("localhost","root","","dookki_db");
	if(!$con)
		{
		echo mysqli_error();
		}
	else
	{
		$customerIdToSearch=$_POST['searchKey'];
		if(isSet($_POST['cbExactMatch']))
			$sql='select * from registration where userid = "'.$customerIdToSearch.'"';
		else
			$sql='select * from registration where userid like "%'.$customerIdToSearch.'%"';
		$qry=mysqli_query($con,$sql);
		return $qry;
	}	
}
function searchByEmail()
{
$con = mysqli_connect('localhost','root','','dookki_db');
	if(!$con)
		{
		echo mysqli_error();
		}
	else
	{
		$emailToSearch=$_POST['searchKey'];
		$sql='select * from registration where email = "'.$emailToSearch.'"';
		$qry=mysqli_query($con,$sql);
		return $qry;
	}		
}
?>