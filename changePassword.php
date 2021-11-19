<?php session_start();
    $uid = $_SESSION['uid'];
    include "header.php"; ?>
<link rel="stylesheet" type="text/css" href="buttonC.css"> 
<body>
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1> New Password </h1>
				</div>
			</div>
		</div>
	</div>
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">					
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
      <table cellpadding="10" cellspacing="12" align="left	">
     <form action="" method="POST">
	 <?php
				$con = mysqli_connect('localhost','dookkifo_server','DookkiMyG4','dookkifo_dookki_db');
				$currentUser = $_SESSION['uid'];
				$sql = "SELECT * FROM registration WHERE userid  = '$currentUser'";
					$gotResults = mysqli_query($con,$sql);
					if($gotResults){
						if(mysqli_num_rows($gotResults)>0){
							while($row = mysqli_fetch_array($gotResults)){
								echo'
	 			<tr>
	 					<input type="hidden" name="uID" class="form-control" value="'.$row['id'].'" >
 					<td><input type="text" name="userpassword" placeholder="Enter New Password" required="" style=" width: 300%">  <br> </td>
				</tr>         
      			<tr>   
					<td align="center"> <input type="submit" class="button" name="newPassword" value="Change Password" >  <br> </td>
   				</tr>';
				}
			}
		}
	?>
	</form>
	</table>
 			<?php
			
				 if(isset($_POST['newPassword']))
				 {
					$con = mysqli_connect("localhost","dookkifo_server","DookkiMyG4","dookkifo_dookki_db");
					 if(!$con)
						 {
						 echo mysqli_error();
						 }
					 else
					 {
						$userpassword = $_POST['userpassword'];
						$userpassword = md5($userpassword);
						echo "<script>alert('$userpassword');</script>";
						$sql= 'update registration 
								set password ="'.$userpassword.'", 
								where userid = "'.$uid.'"';
					}
					if (mysqli_query($con, $sql)) {
						echo "<script>alert('Password changed successfully');</script>";
					} else {
						$eMessage = "Error changing password: " . mysqli_error($con);
						echo "<script>alert($eMessage);</script>";
					}			   	  
						//mysqli_close($con);
						//session_destroy();
						//$URL="login.php";
						//echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
						//echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
				 }
        	?>
				</div>
			</div>		
		</div>
	</div>
<?php include "footer.php"; ?>