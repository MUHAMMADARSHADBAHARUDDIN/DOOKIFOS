<?php
function getFoodInformation($id)
{
$con = mysqli_connect("localhost","root","","dookki_db");
	if(!$con)
		{
		echo mysqli_error();
		}
	else
	{
		//echo 'connected';
		$sql='select * from menu where id = "'.$id.'"';
		$qry=mysqli_query($con,$sql);
		return $qry;
	}
}

function UpdateFood()
{
	//echo '<br>Nak update:';
	//print_r($_POST);
	$con = mysqli_connect("localhost","root","","dookki_db");
	if(!$con)
		{
		echo mysqli_error();
		}
	else
	{
		//echo 'connected';
		$sql= 'update menu 
            set category ="'.$_POST['category'].'", 
                title="'.$_POST['title'].'", 
                description="'.$_POST['description'].'", 
                price="'.$_POST['price'].'"
				image="'.$_POST['image'].'"
		where id = "'.$_POST['id'].'"';
		//echo $sql;
		$qry=mysqli_query($con,$sql);
		return $qry;
        
	}	
	
	
}
?>
