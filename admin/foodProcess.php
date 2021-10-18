<?php
include "foodFunction.php";
echo "executed";
if(isSet($_POST['UpdateFood']))
	{
    UpdateFood();
	header( "refresh:0; url=view_food2.php");
	}
?>