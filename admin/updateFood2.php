<?php session_start();
    $uid = $_SESSION['uid'];?>
<?php include "header.php"; ?>
<?php include "foodFunction.php"; ?>
<link rel="stylesheet" type="text/css" href="button.css">
<link rel="stylesheet" type="text/css" href="style.css">
<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Add Food</h1>
				</div>
			</div>
		</div>
	</div>
<div class="content">
	<br><br>
	<form action="" method="post" enctype="multipart/form-data">
	<table border=0 align="center" bgcolor="white" width="65%" style="box-shadow: 1px 3px 15px 2px;" cellpadding="10" cellspacing="15" >
	<tr align="center">
			<td class="title">Upload New Food</td><td><a href="view_food2.php" style="color: red; text-decoration: none;">View All Foods</a></td>
    </tr>  
   <?php
   $foodId = $_POST['foodIdToUpdate'];
   $foodQry = getFoodInformation($foodId);
   $foodRecord = mysqli_fetch_assoc($foodQry); 
   echo' 
   <tr align="center">  
   <form action="foodProcess.php" method="POST"> 
   <td> Food ID</td>
   <td><label>'.$foodRecord['id'].'</label></td>
   <td><input type="hidden" name="foodId" value="'.$foodRecord['id'].'" placeholder="" class="text" required></td>
   </tr> 
   <tr align="center">
   <td> Current Category</td>
   <td><input type="text" name="curCat" value="'.$foodRecord['category'].'" placeholder="" class="text" required></td>
   </tr> 
     <tr align="center">   
          <td>Choose Food Category</td>
          <td>
          <select class="text" name="cat" value="'.$foodRecord['category'].'">
					<option value="mainmenu">Main Menu</option>
					<option value="sidemenu">Side Menu</option>
					<option value="beverages">Beverages</option>
				</select>
   	    </td>
   	   <tr align="center">
   	   	    <td> Enter Title</td>
   	   	    <td><input type="text" name="title" value="'.$foodRecord['title'].'" placeholder="" class="text" required></td>
   	   </tr> 
	<tr align="center"> 
            <td> Enter Food Detail </td>
			<td><input type="text" name="desc" value="'.$foodRecord['description'].'" placeholder="" class="text" required></td>
	</tr>
	<tr align="center"> 
            <td> Enter Food price </td>
			<td> <input type="text" name="price" value="'.$foodRecord['price'].'" class="text"> </td>
	</tr>
    <tr align="center"> 
            <td> Enter Food Image </td>
			<td><img src="'.$foodRecord['image'].'" width=200 height=200>
            <br><br><input type="File" name="img" value="'.$foodRecord['image'].'" placeholder="" class="" ></td>
	</tr>
    <tr>    
    	<td colspan=2 align="center"> <input type="submit" name="UpdateFood" value="Update Food" class="button"> </td>
    </tr>
</table>
</form>'
?>
<?php
if(isset($_POST['UpdateFood']))
{
	echo "executed";
	$con = mysqli_connect("localhost","root","","dookki_db");
	if(!$con)
		{
		echo mysqli_error();
		}
	else
	{
		$fid = $_POST['foodId'];
	    $cat = $_POST['cat'];
		$title = $_POST['title'];
		$desc = $_POST['desc'];
		$price = $_POST['price'];
		$i = "mimg/".$_FILES['img']['name'];
		move_uploaded_file($_FILES['img']['tmp_name'], $i);

		if ($_FILES['img']['size'] == 0) {
		$sql= 'update menu 
		set category ="'.$cat.'", 
			title="'.$title.'", 
			description="'.$desc.'", 
            price="'.$price.'"
		where id = "'.$fid.'"';
		} 
		else {
			$sql= 'update menu 
			set category ="'.$cat.'", 
				title="'.$title.'", 
				description="'.$desc.'", 
				price="'.$price.'",
				image="'.$i.'"
			where id = "'.$fid.'"';	
		}
		if (mysqli_query($con, $sql)) {
			echo "Record updated successfully";
		  } else {
			echo "Error updating record: " . mysqli_error($con);
		  }
		  
		  mysqli_close($con);
		$URL="view_food2.php";
		echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
		echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
	}
}
?>	
</div>
<br>
<?php include "footer.php"; ?> 