<?php session_start();
    $uid = $_SESSION['uid'];
    include "header.php"; ?>
	<?php include "customerFunction.php"; ?>
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
					<h1>Update Customer Profile</h1>
				</div>
			</div>
		</div>
	</div>
<body>

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<center>
<!--<p><a href="admin_login.php" class="button">Admin Login</a></p>-->
<p>


</p>
	<div class="row">
		<div class="col-md-8 offset-2">
			<form method="post" action="" enctype="multipart/form-data">
				<?php
				 $customerId = $_POST['customerIdToUpdate'];
                 $customerQry = getCustomerInformation($customerId);
                 $customerRecord = mysqli_fetch_assoc($customerQry);
				 $imagePath = "../" . $customerRecord['profile']; 
								echo'
									<div class="col-md-6">
										<div class="form-group">
										<img src= '.$imagePath.' height="150" width="125">
										</div>
										<div class="form-group">
										<input type="hidden" name="uID" class="form-control" value="'.$customerRecord['id'].'">
										</div>
										<div class="form-group">
											Username <input type="text" name="updateusername" class="form-control" value="'.$customerRecord['userid'].'" required readonly>
										</div>
										<div class="form-group">
											Email <input type="email" name="useremail" class="form-control" value="'.$customerRecord['email'].'" required readonly>
										</div>
										
										<div class="form-group">
											Phone Number <input type="tel" name="tel" class="form-control" value="'.$customerRecord['tel'].'">
										</div>

										<div class="form-group">
											Birth Date <input type="date" name="date" class="form-control" value="'.$customerRecord['date'].'">
										</div>
										<div class="form-group">
											Address <input type="text" name="address" class="form-control" value="'.$customerRecord['address'].'">
										</div>

										<div class="form-group">
											Change Profile Picture<input type="File" name="picture" value="'.$customerRecord['profile'].'"class="form-control">
										</div>
										<div class="form-group">
											<input type="submit" name="updateCustomer" class="btn btn-info" value="Update">
										</div>									
									</div>';							
							
					?>
				 <?php
				 if(isset($_POST['updateCustomer']))
				 {
					$con = mysqli_connect("localhost","dookkifo_server","DookkiMyG4","dookkifo_dookki_db");
					 if(!$con)
						 {
						 echo mysqli_error();
						 }
					 else
					 {
						 
						$uID = $_POST['uID'];
						$updateusername = $_POST['updateusername'];
						$useremail = $_POST['useremail'];
						$date = $_POST['date'];
						$address = $_POST['address'];
						$tel = $_POST['tel'];
						$i = "../profileC".$_FILES['picture']['name'];
						move_uploaded_file($_FILES['picture']['tmp_name'], $i);

						if ($_FILES['picture']['size'] == 0) {
							$sql= 'update registration 
							set  userid = "'.$updateusername.'",
								email="'.$useremail.'",
								date="'.$date.'",
								address="'.$address.'",
								tel="'.$tel.'"
							where id = "'.$uID.'"';
						}
						else {
							$sql= 'update registration 
							set  userid = "'.$updateusername.'",
								email="'.$useremail.'",
								date="'.$date.'",
								address="'.$address.'",
								tel="'.$tel.'", 
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
					
		            $URL="view_customer.php";
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