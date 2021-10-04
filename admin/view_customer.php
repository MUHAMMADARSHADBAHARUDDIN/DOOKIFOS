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
					<h1>View Customer</h1>
				</div>
			</div>
		</div>
	</div>
<div class="content">

<br>

	<center>
	<table border=1 width="80%" cellspacing="5" cellpadding="5" style="box-shadow: 5px 4px 10px 2px; ">

		<tr>
            <th>USER ID</th>
			<th>EMAIL</th>
			
		</tr>

       
		<?php 
			$s = mysqli_query($con,"select * from registration");
			while($r = mysqli_fetch_array($s))
			{
			?>
				<tr align=center>
					<td><?php echo $r['userid']; ?></td>
					<td><?php echo $r['email']; ?></td>

				</tr>	
		<?php	
			}
		?>
   </table>	


</div>
<br>
<?php include "footer.php"; ?>