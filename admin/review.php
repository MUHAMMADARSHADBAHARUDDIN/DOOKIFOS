<?php session_start();
    $uid = $_SESSION['uid'];?>
<?php include "header.php"; ?>
<?php include "connect.php"; ?>
<style type="text/css">
	tr{
		font-size: 1.2em;
		color: black;
	}
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
		text-shadow: 2px 3px 2px #FFFFFF;
	}
</style>
<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Feedback</h1>
				</div>
			</div>
		</div>
	</div>
<br><br>
<div class="content">
	<center>
	<table border=1 width="80%" cellspacing="3" cellpadding="5" style="box-shadow: 5px 4px 10px 2px;">
		<tr>
			<th>ID</th><th>NAME</th><th>FEEDBACKS</th><th>COMMENTS</th><th>REMOVE</th>
		</tr>
		<?php 
			$s = mysqli_query($con,"select * from review");
			while($r = mysqli_fetch_array($s))
			{
			?>
				<tr align=center>
					<td><?php echo $r['id']; ?></td>
					<td><?php echo $r['name']; ?></td>
					<td><?php echo $r['review']; ?></td>
					<td><?php echo $r['description']; ?></td>
					<td><a href="delreview.php?a=<?php echo $r['id']; ?>" class="del" onclick="return confirmation('Are you sure you want to delete?');">DELETE</a></td>
				</tr>	
		<?php	
			}
		?>
	</table>	
</div>
<br>
<?php include "footer.php"; ?>