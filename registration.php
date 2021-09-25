<?php include "header.php"; ?> 


<body>
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1> REGISTRATION US </h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Contact -->
	
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

	 <tr>  
 <td> <input type="email" name="email" value="<?php echo isset($_POST['email'])?$_POST['email']:''?>" placeholder="Enter Your Email Address" required="" style="padding: 10px; width: 300%">  <br> </td>
</tr>

<tr>   
<td align="center"> <input type="submit" class="btn btn-primary" name="generateCode" value="Get Your Code" >  <br> </td>
   </tr>
<tr>  
	
  <tr>
  	<td>
  <input type="text" name="uid" value="" placeholder="Enter user id"  style="padding: 10px; width: 300%"> <br>  </td>
    </tr>
   
   <tr>	
 <td> <input type="password" name="pass" value="" placeholder=" Enter Your password"  style="padding: 10px; width: 300%"> <br> </td>
   </tr>



 <td> <input type="code" name="code" value="" placeholder="Enter Your Code" style="padding: 10px; width: 300%">  <br> </td>
</tr>
         
      <tr>   
<td align="center"> <input type="submit" class="btn btn-primary" name="registerUser" value="Register Now" >  <br> </td>
   </tr>
    	
    </form>
 </table>

					<?php
					
					$servername = "localhost";
				    $username = "root";
				    $password = "";
				    $dbname = "dookki_db";
				    $code = '12345';
					/*include "connect.php";*/
                    include "mail.php";

					// Create connection
                    $conn = mysqli_connect('localhost','root','','dookki_db');
                    // Check connection
                    if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                    }
					
					if(isset($_POST['generateCode']))
					{
						$uid = $_POST['uid'];
						$pass = $_POST['pass'];
						$email = $_POST['email'];
						$randCode=rand(10000,99999);
						
						$sql_e = "SELECT * FROM registration WHERE email='$email'";
						$res_e = mysqli_query($conn, $sql_e);
						if (mysqli_num_rows($res_e) > 0) {
							echo"<script>alert('Sorry... email already being used.');</script>";
						}else{
						//include "mail.php";
						emailVerification("mikhail.shahmie@gmail.com", $email, "Register User Verification", $randCode);
						$code = $randCode;
						}
					}

					if(isset($_POST['registerUser']))
					{
						
						$uid = $_POST['uid'];
						$pass = $_POST['pass'];
						$email = $_POST['email'];

						$sql_u = "SELECT * FROM registration WHERE userid='$uid'";
						$res_u = mysqli_query($conn, $sql_u);
						if (mysqli_num_rows($res_u) > 0) 
						{
							echo"<script>alert('Sorry... username already being used.');</script>";
						}
						include "connect.php";
						if ($_GET['code']=$code)
						{
							mysqli_query($con,"insert into registration(userid, password,email) values('$uid','$pass','$email')");
							//echo "<script>alert('Registration SuccessFully');</script>"; for now
							//echo "<center>Registration SuccessFully ... Click to <a href='login.php'>login</a></center>";
						}
						else
						{
							echo "<script>alert('Registration Fail, please try again');</script>"; 
						}
							
						

						
					}	

					?>





				</div>
			</div>
		
		</div>
	</div>
	<!-- End Contact -->

<?php include "footer.php"; ?>