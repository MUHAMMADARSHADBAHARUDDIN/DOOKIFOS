<?php include "header.php"; ?> 
<link rel="stylesheet" type="text/css" href="buttonC.css">
<body>
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Admin Login </h1>
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
<form action="loginck_admin.php" method="post">

  <table border="0" align="center" cellpadding="5" cellspacing="7">
	
	        <tr align="right">	
		     <!--<td> <img src="Login.png" style="width: 30%"> <br>
		      <a href="registration.php"> New User?</a></td>-->
		 </tr>
		<tr>
             <td> Enter your Admin id </td>
        <td> <input type="text" name="uid" placeholder="Enter Your User ID" style="padding: 10px; width: 150%"> <br>  </td>
		
		</tr>

		<tr>
           <td> Enter your password</td>
 <td> <input type="Password" name="pass" placeholder="Enter Your Password" style="padding: 10px; width: 150%"> <br>   </td>
		
		</tr>
		
		<tr>	
		<td>                    </td>    
 <td> <input type="submit" class="button" name="" value="Login Now" style ="right: 1000px;" > </td> 
</tr>
<tr>
		<td>                    </td>    
           <td><a href="forgotPasswordAdmin.php"> Forgot password?</a></td>
		
		</tr>      
              
</form>
		</table>			




				</div>
			</div>
		
		</div>
	</div>
	<!-- End Contact -->
<?php include "footer.php"; ?>