<?php session_start(); ?>
<?php
include  "connect.php";

if(isset($_SESSION['uid']))
{
	$uid = $_SESSION['uid'];
	$nm = $_POST['nm'];
	$mo = $_POST['mo'];
	$em = $_POST['em'];
	$ad = $_POST['ad'];
	$s= mysqli_query($con,"select * from addcart where u_id='$uid'");
	while($r = mysqli_fetch_array($s))
	{
		$p_id = $r['p_id'];
		$q = $r['qty'];
		$t = $r['total'];
		mysqli_query($con,"insert into checkout(p_id, u_id,name,mobile,email,location,qty,total) values('$p_id','$uid','$nm','$mo','$em','$ad','$q','$t')") or die("Error");
		mysqli_query($con,"DELETE from addcart WHERE u_id ='$uid'");
  }

}

$totalPrice = 0;
$sql = "SELECT * FROM tempTotal";
$s = mysqli_query($con,$sql);
while($tP = mysqli_fetch_array($s))
{
  $totalPrice = $tP['tTotal'];
}
mysqli_query($con,"DELETE from tempTotal");

$name = $_POST['nm'];
$email = $_POST['em'];
$phoneNumber = $_POST['mo'];

$totalPrice = ($totalPrice * 100);
$some_data = array(
  'userSecretKey' => 'ki4c7zci-duyo-xu9g-l95g-oa6bi5hr6ilh',
  'categoryCode' => 'xyi66tql',
  'billName' => 'Dookki',
  'billDescription' => 'Dookki Checkout',
  'billPriceSetting' => 1,
  'billPayorInfo' => 1,
  'billAmount' => $totalPrice,
  'billReturnUrl' => 'http://localhost/masterdookifos/GenerateBillCall.php',
  'billCallbackUrl' => '',
  'billExternalReferenceNo' => '',
  'billTo' => $name,
  'billEmail' => $email,
  'billPhone' => $phoneNumber,
  'billSplitPayment' => 0,
  'billSplitPaymentArgs' => '',
  'billPaymentChannel' => 0,
);
$curl = curl_init();

curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_URL, 'https://dev.toyyibpay.com/index.php/api/createBill');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $some_data);

$result = curl_exec($curl);
$info = curl_getinfo($curl);
curl_close($curl);
$obj = json_decode($result, true);
$billcode = $obj[0]['BillCode'];

?>

<!--SEND USER TO TOYYIBPAY PAYMENT-->
<script type="text/javascript">
  //redirect to payment gateway
  window.location.href = "https://dev.toyyibpay.com/<?php echo $billcode; ?>";
</script>
