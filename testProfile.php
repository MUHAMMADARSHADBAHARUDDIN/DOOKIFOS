<?php session_start();
    $uid = $_SESSION['uid'];
    include "header.php"; ?>
<!DOCTYPE html>
<html>
<style>
.button {
  top:10%;
  left:55%;
  background-color: blue;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  width:  200px;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  display:inline-block;
 
}

</style>
<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Update User Profile</h1>
				</div>
			</div>
		</div>
	</div>
<body>

<center>
<!--<p><a href="admin_login.php" class="button">Admin Login</a></p>-->
<p>


</p>
	<div class="row">
		<div class="col-md-8 offset-2">
			<form method="post" action="" enctype="multipart/form-data">
				<?php
				$conn = mysqli_connect('localhost','root','','dookki_db');
				$currentUser = $_SESSION['uid'];
				$sql = "SELECT * FROM registration WHERE userid  = '$currentUser'";

					$gotResults = mysqli_query($conn,$sql);

					if($gotResults){
						if(mysqli_num_rows($gotResults)>0){
							while($row = mysqli_fetch_array($gotResults)){
								//print_r($row['userid']);
								echo'
									<div class="col-md-6">
										<div class="form-group">
											<img src="'.$row['profile'].'" height="150" width="125">
										</div>
										<div class="form-group">
										<input type="hidden" name="uID" class="form-control" value="'.$row['id'].'">
										</div>
										<div class="form-group">
											Username : <input type="text" name="updateusername" class="form-control" value="'.$row['userid'].'">
										</div>
										<div class="form-group">
											Email : <input type="email" name="useremail" class="form-control" value="'.$row['email'].'">
										</div>
										<div class="form-group">
											Password : <input type="password" name="userpassword" class="form-control" value="'.$row['password'].'">
										</div>

										<div class="form-group">
											Change Profile Picture<input type="File" name="picture" value="'.$row['profile'].'"class="form-control">
										</div>
										<div class="form-group">
											<input type="submit" name="updateProfile" class="btn btn-info" value="Update">
										</div>
										
									</div>';
							
							}
						}
					}
				?>
				 <?php
				 if(isset($_POST['updateProfile']))
				 {
					//echo " Update executed";
					 $con = mysqli_connect("localhost","root","","dookki_db");
					 if(!$con)
						 {
						 echo mysqli_error();
						 }
					 else
					 {
						//echo "cmd executed";
						$uID = $_POST['uID'];
						$updateusername = $_POST['updateusername'];
						$useremail = $_POST['useremail'];
						$userpassword = $_POST['userpassword'];
						$i = "profileC/".$_FILES['picture']['name'];
						move_uploaded_file($_FILES['picture']['tmp_name'], $i);

						if ($_FILES['picture']['size'] == 0) {
							$sql= 'update registration 
							set  userid = "'.$updateusername.'",
								password ="'.$userpassword.'", 
								email="'.$useremail.'" 
							where id = "'.$uID.'"';
						}
						else {
							$sql= 'update registration 
							set  userid = "'.$updateusername.'",
								password ="'.$userpassword.'", 
								email="'.$useremail.'", 
								profile="'.$i.'"
							where id = "'.$uID.'"';		
						}
						echo $sql;
						if (mysqli_query($con, $sql)) {
							echo "Record updated successfully";
						} else {
							echo "Error updating record: " . mysqli_error($con);
						}
				   	  
		            mysqli_close($con);
		            $URL="login.php";
		            echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
		            echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
				 }
				}
        	?>
			</form>
		</div>
	</div>
</body>
</html>
<?php include "footer.php"; ?>