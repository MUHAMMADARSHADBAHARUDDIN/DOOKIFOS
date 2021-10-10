<?php

function getListOfCustomer()
{
 //echo 'in getListOfCustomer()';
 //1.create connection to database
 $con = mysqli_connect("localhost","root","","dookki_db");
	if(!$con)
		{
		echo mysqli_error();
		}
	else
	{
		//echo 'connected';
		$sql='select * from registration';
		//echo $sql;
		$qry=mysqli_query($con,$sql);
		return $qry;
	}
}
function searchByCustomerId()
{
	//print_r($_POST);
$con = mysqli_connect("localhost","root","","dookki_db");
	if(!$con)
		{
		echo mysqli_error();
		}
	else
	{
		//echo 'connected';
		$customerIdToSearch=$_POST['searchKey'];
		if(isSet($_POST['cbExactMatch']))
			$sql='select * from registration where userid = "'.$customerIdToSearch.'"';
		else
			$sql='select * from registration where userid like "%'.$customerIdToSearch.'%"';
		//echo $sql;
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
		//echo 'connected';
		$emailToSearch=$_POST['searchKey'];
		$sql='select * from registration where email = "'.$emailToSearch.'"';
			
		//echo $sql;
		$qry=mysqli_query($con,$sql);
		return $qry;
	}	
		
	
}



?>