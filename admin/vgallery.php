<?php include "header.php"; ?>
<?php include "connect.php"; ?>
<style type="text/css">
	tr{
		font-size: 1.2em;

	}
	
	.del{
		color: red;
		text-decoration: none;
	}
	.del:hover{
		color: blue;
		text-decoration: none;
		text-shadow: 2px 3px 2px #FFFFFF;
	}
	.btn{
		color: white;
		background-color: black;
		padding: 10px;
	}


</style>
<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>View Gallery</h1>
				</div>
			</div>
		</div>
	</div>
<div class="content">
	<center><a href="gallery.php" >Upload Gallery</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	<?php include "connect.php";
		
	 ?>
		<table border=0 cellpadding="10" cellspacing="5">
			<?php
			$r = 0;
			$s =mysqli_query($con,"select * from gallery");
			while($row = mysqli_fetch_array($s))
			{
				if($r%4 == 0)
		    	{
					echo "<tr>";
		    	}		 
		   		echo"<td> <img src='{$row['image']}' alt='' width=210 height=210> <br><center><a href=dgallery.php?id={$row['id']} style='text-decoration:none; color:red;'>Delete</a></center> </td>"; 
	           if($r%4 == 3) 
	           {
	           	    echo "</tr>";
	           }
	           $r++;
	        }
	        ?>

		</table>
		<br><br>	
</div>
<?php include "footer.php"; ?>