<?php include "forgotHeader.php"; ?> 
<link rel="stylesheet" type="text/css" href="buttonC.css">
<body>
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1> Forgot Password </h1>
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
	 <tr>  
 <td> <input type="email" name="email" value="" placeholder="Enter Your E-mail" required="" style="padding: 10px; width: 300%">  <br> </td>
</tr>       
      <tr>   
<td align="center"> <input type="submit" class="button" name="forgotPassword" value="Submit Email" >  <br> </td>
   </tr>   	
    </form>
 </table>
					<?php
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "dookki_db";
                    include "mail.php";

                    $con = mysqli_connect('localhost','dookkifo_server','DookkiMyG4','dookkifo_dookki_db');
                    if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                    }
                   
					if(isset($_POST['forgotPassword'])){
                        $email = $_POST['email'];
						$sql = 'SELECT password FROM admin WHERE email= "'.$email.'"';
                        $result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) {
								$pass = "Your password is " . $row["password"] . "";
								emailForgotPassword("mikhail.shahmie@gmail.com", $email, "Forgot Password", $pass);
								}
							}
						else
							{
								echo "<script>alert('Email not found, please try again.');</script>"; 
							}
					}
					?>
				</div>
			</div>		
		</div>
	</div>
<?php include "footer.php"; ?>