<?php
include('../admin_area/includes/connect.php');
include('../admin_area/functions/common_function.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Page</title>
  <!--bootstrap css link-->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<style>
.payment_img
{
	width:90%;
	margin:auto;
	display:block;
}
</style>
<body>
<!-- php code to access user-id -->
<?php
$user_ip=getIPAddress();
$get_user="Select * from user_table where user_ip='$user_ip'";
$result=mysqli_query($con,$get_user);
$run_query=mysqli_fetch_array($result);
$user_id=$run_query['user_id'];

?>
<div class="container">
<h2 class="text-center text-info">Payment Options</h2>
<div class="row d-flex justify-content-center align-items-center my-5">
<div class="col-md-6">
<a href="https://www.paypal.com" target="_blank"><img src="../images/upi.jpg" alt="payment_img"></a>
</div>
<div class="col-md-6">
<a href="order.php?user_id=<?php echo $user_id ?>"><h2 class="text-center">Pay offline</h2></a>
</div>
</div>
</div>

</body>
</html>