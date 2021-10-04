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
					<h1>Update Admin Profile</h1>
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
			<form action="">
				<?php
				$conn = mysqli_connect('localhost','root','','dookki_db');
				$currentUser = $_SESSION['uid'];
				$sql = "SELECT * FROM admin WHERE adminid  = '$currentUser'";

					$gotResults = mysqli_query($conn,$sql);

					if($gotResults){
						if(mysqli_num_rows($gotResults)>0){
							while($row = mysqli_fetch_array($gotResults)){
								//print_r($row['userid']);
								?>
									<div class="col-md-6">
										<div class="form-group">
											Username : <input type="text" name="updateusername" class="form-control" value="<?php echo $row['adminid']; ?>">
										</div>
										<div class="form-group">
											Password : <input name="userpassword" class="form-control" value="<?php echo $row['password']; ?>">
										</div>
										<div class="form-group">
											<input type="file" name="userimage" class="form-control">
										</div>
					
										<div class="form-group">
											<input type="submit" name="update" class="btn btn-info" value="Update">
										</div>
									</div>
								<?php
							}
						}
					}
				?>
			</form>
		</div>
	</div>
</body>
</html>
<?php include "footer.php"; ?>
