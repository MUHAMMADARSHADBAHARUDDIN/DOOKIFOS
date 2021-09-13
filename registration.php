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
 <td> <input type="email" name="email" value="" placeholder="Enter Your Email Address" required="" style="padding: 10px; width: 300%">  <br> </td>
</tr>

<tr>   
<td align="center"> <input type="submit" name="generateCode" value="Get Your Code" style="color:red; background: lightgreen; font-size: 1.3em; font-family: times new roman">  <br> </td>
   </tr>
<tr>  
	
  <tr>
  	<td>
  <input type="text" name="uid" value="" placeholder="Enter user id" required="" style="padding: 10px; width: 300%"> <br>  </td>
    </tr>
   
   <tr>	
 <td> <input type="password" name="pass" value="" placeholder=" Enter Your password" required="" style="padding: 10px; width: 300%"> <br> </td>
   </tr>



 <td> <input type="code" name="code" value="" placeholder="Enter Your Code" style="padding: 10px; width: 300%">  <br> </td>
</tr>
         
      <tr>   
<td align="center"> <input type="submit" name="registerUser" value="Register Now" style="color:red; background: lightgreen; font-size: 1.3em; font-family: times new roman">  <br> </td>
   </tr>
    	
    </form>
 </table>

					<?php
					
					$code = '12345';
					
					if(isset($_POST['generateCode']))
					{
						$uid = $_POST['uid'];
						$pass = $_POST['pass'];
						$email = $_POST['email'];
						$randCode=rand(10000,99999);
						include "mail.php";
						emailVerification("mikhail.shahmie@gmail.com", $email, "Register User Verification", $randCode);
						$code = $randCode;
					}

					if(isset($_POST['registerUser']))
					{
						
						$uid = $_POST['uid'];
						$pass = $_POST['pass'];
						$email = $_POST['email'];
						include "connect.php";
						if ($_GET['code']=$code)
						{
							mysqli_query($con,"insert into registration(userid, password,email) values('$uid','$pass','$email')");
							echo "<script>alert('Registration SuccessFully');</script>";
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