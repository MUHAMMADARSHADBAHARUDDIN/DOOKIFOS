<?php
function getCustomerInformation($id)
{
	$con = mysqli_connect('localhost','dookkifo_server','DookkiMyG4','dookkifo_dookki_db');
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