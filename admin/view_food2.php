<?php session_start();
    $uid = $_SESSION['uid'];?>
<?php include "header.php"; ?>
<?php include "connect.php"; ?>
<link rel="stylesheet" type="text/css" href="button.css">
<style type="text/css">
	tr{
		font-size: 1.2em;
		color: black/*#26947e*/;


	}
	.del{
		color: red;
		text-decoration: none;
	}
	.update{
        border: none;
        background: none;
		color: green;
		text-decoration: none;
	}
	/*tr:hover{
		background-color: grey;
		color: white;
	

	}
	th{
		color: tomato;
		font-size: 1.3em;
	}
	.del{
		color: red;
		text-decoration: none;
	}
	.del:hover{
		color: blue;
		text-decoration: none;
		text-shadow: 2px 3px 2px #FFFFFF;*/
	}


</style>
<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>View Menu</h1>
				</div>
			</div>
		</div>
	</div>
<div class="content">
<a href="food.php" class = button>Add New Food</a>	
<br>

	<center>
	<table border=1 width="80%" cellspacing="5" cellpadding="5" style="box-shadow: 5px 4px 10px 2px; ">

		<tr>
		    <th>FOOD ID</th>
			<th>CATEGORY</th>
			<th>TITLE</th>
			<th>DESCRIPTION</th>
			<th>PRICE</th>
			<th>IMAGE</th>
			<th>UPDATE</th>
			<th>DELETE</th>
		</tr>
		<?php 
		    include "foodFunction.php";
			$s = mysqli_query($con,"select * from menu");
			while($r = mysqli_fetch_array($s))
			{
			?>
				<tr align=center>
				    <td><?php echo $r['id'];?></td>
					<td><?php echo $r['category']; ?></td>
					<td><?php echo $r['title']; ?></td>
					<td><?php echo $r['description']; ?></td>
					<td><?php echo $r['price']; ?></td>
					<td><img src="<?php echo $r['image']; ?>" width=70 height=70></td>
                    <td><form action="updateFood2.php" method="POST">
						<input type="hidden" name="foodIdToUpdate" value=<?php echo $r['id'];?> >
						<input type="submit"  value="UPDATE" class="update"name="updateFoodButton">
					</form></td>
					<td><a href="delfood.php? a=<?php echo $r['id']; ?>" class="del" onclick="return confirm('Are you sure you want to delete?');">DELETE</a></td>
				</tr>	
		<?php	
			}
		?>
   </table>	


</div>
<br>
<?php include "footer.php"; ?>