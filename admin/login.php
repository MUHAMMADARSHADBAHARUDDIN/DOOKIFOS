<?php include "header.php"; ?> 
<link rel="stylesheet" type="text/css" href="buttonC.css">
<body>
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Login </h1>
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
<form action="loginck.php" method="post">

  <table border="0" align="center" cellpadding="5" cellspacing="7">
	
	        <tr align="right">	
		     <td> <img src="loginpic.png" style="width: 30%"> <br>
		      <a href="registration.php"> New User?</a></td>
		 </tr>
		<tr>
             <td> enter your user id </td>
        <td> <input type="text" name="uid" placeholder="Enter Your User ID" style="padding: 10px; width: 150%"> <br>  </td>
		
		</tr>

		<tr>
           <td> enter your password</td>
 <td> <input type="Password" name="pass" placeholder="Enter Your Password" style="padding: 10px; width: 150%"> <br>   </td>
		
		</tr>
		
		<tr>	    
		<td>                    </td>    
 <td> <input type="submit" class="button" name="" value="Login Now" > </td> 
</tr>
<tr>
		<td>                    </td>    
           <td><a href="forgotPassword.php"> Forgot password?</a></td>
		
		</tr>      
              
</form>
		</table>			




				</div>
			</div>
		
		</div>
	</div>
	<!-- End Contact -->
<?php include "footer.php"; ?>