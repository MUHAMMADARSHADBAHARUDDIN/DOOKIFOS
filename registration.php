<?php include "header.php"; ?>
<link rel="stylesheet" type="text/css" href="buttonC.css">
<body>
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1> REGISTRATION </h1>
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
 <td> <input type="email" name="email" value="<?php echo isset($_POST['email'])?$_POST['email']:''?>" placeholder="Enter Your Email Address" required="" style="padding: 10px; width: 300%">  <br> </td>
</tr>
<tr>   
<td align="center"> <input type="submit" class="button" name="generateCode" value="Get Your Code" >  <br> </td>
   </tr>
<tr>  	
  <tr>
  	<td>
  <input type="text" name="uid" value="" placeholder="Enter user id"  style="padding: 10px; width: 300%"> <br>  </td>
    </tr>
   <tr>	
 <td> <input type="password" name="pass" value="" placeholder=" Enter Your password"  style="padding: 10px; width: 300%"> <br> </td>
   </tr>
 <td> <input type="code" name="code" value="" placeholder="Enter Your Code"  style="padding: 10px; width: 300%">  <br> </td>
</tr>       
      <tr>   
<td align="center"> <input type="submit" class="button" name="registerUser" value="Register Now" >  <br> </td>
   </tr>  	
    </form>
 </table>
					<?php
					$servername = "localhost";
				    $username = "root";
				    $password = "";
				    $dbname = "dookki_db";
                    include "mail.php";

                    $conn = mysqli_connect('localhost','dookkifo_server','DookkiMyG4','dookkifo_dookki_db');
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
						}
						else {
						mysqli_query($conn,"insert into tempcode(tCode) values('$randCode')");
						emailVerification("mikhail.shahmie@gmail.com", $email, "Register User Verification", $randCode);						
						}
					}
					if(isset($_POST['registerUser']))
					{						
						$uid = $_POST['uid'];
						$pass = $_POST['pass'];
						$pass = md5($pass);
						$email = $_POST['email'];
						$code = $_POST['code'];	
						
						if (($uid == NULL) || ($pass == NULL) || ($code == NULL))
						{
							echo"<script>alert('Pls ensure all field is not blank!');</script>";
						}
						else { 

						$sql_u = "SELECT * FROM registration WHERE userid='$uid'";
						$res_u = mysqli_query($conn, $sql_u);
						if (mysqli_num_rows($res_u) > 0) 
						{
							echo"<script>alert('Sorry... username already being used.');</script>";
						}
						else {							
							$sql_cd = "SELECT * FROM tempcode";
							$s = mysqli_query($conn,$sql_cd);
							while($rcode = mysqli_fetch_array($s))
							{
								if ($code==$rcode['tCode'])
								{
									mysqli_query($conn,"insert into registration(userid, password,email) values('$uid','$pass','$email')");
									echo "<script>alert('Registration SuccessFully');</script>";
									mysqli_query($conn,"DELETE from tempcode");
									$URL="login.php";
									echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
									echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
								}
								else
								{
									echo "<script>alert('Registration Fail, please try again');</script>"; 
								}
							}							
					}						
				}						
					}	
					?>
				</div>
			</div>		
		</div>
	</div>
<?php include "footer.php"; ?>