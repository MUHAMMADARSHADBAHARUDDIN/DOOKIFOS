<?php
function getCustomerInformation($id)
{
$con = mysqli_connect("localhost","root","","dookki_db");
	if(!$con)
		{
		echo mysqli_error();
		}
	else
	{
		$sql='select * from registration where userid = "'.$id.'"';
		$qry=mysqli_query($con,$sql);
		return $qry;
	}
}
?>