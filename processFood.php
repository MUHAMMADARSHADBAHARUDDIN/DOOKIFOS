<?php
include "foodFunction.php";
//print_r($_POST)
	if(isSet($_POST['updateFoodButton']))
	{
	updateFacilityInfo();
	header( "refresh:0; url=view_food2.php");
	}
?>