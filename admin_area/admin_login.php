<?php
include('../admin_area/includes/connect.php');
include('../admin_area/functions/common_function.php');
@session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <!--bootstrap css link-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


<!--font-awesome link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    body
    {
overflow-x:hidden;
    }
    </style>
  </head>
  <body>
    <div class="container-fluid m-3">
    <h2 class="text-center mb-5">Admin Login</h2>
    <div class="row d-flex justify-content-center">
    <div class="col-lg-3">
    <img src="../images/adminreg.jpg" alt="Admin Registration" class="img-fluid">
    </div>
    <div class="col-lg-6">
    <form action="" method="post">
    <div class="form-outline mb-4">
    <label for="admin_name" class="form-label">Username</label>
    <input type="text" id="admin_name" name="admin_name" placeholder="Enter your Username" required="required" class="form-control" />
    </div>
       
     <div class="form-outline mb-4">
    <label for="admin_password" class="form-label">Password</label>
    <input type="password" id="admin_password" name="admin_password" placeholder="Enter your Password" required="required" class="form-control" />
    </div>
    
    <div>
    <input type="submit" class="bg-info py-2 px-3 border-0" name="admin_login" value="Login">
    <p class="small fw-bold mt-2 pt-1">Don't you have an account ? <a href="admin_registration.php" class="link-danger">Register</a></p>
    </div>
    </form>
    </div>
    </div>
    </div>
  </body>
</html>

<?php

if(isset($_POST['admin_login']))
{
	
	$admin_name=$_POST['admin_name'];
	$admin_password=$_POST['admin_password'];
	
	$select_query="Select * from admin_table where admin_name='$admin_name'";
	$result=mysqli_query($con,$select_query);
	$rows_count=mysqli_num_rows($result);
	$rows_data=mysqli_fetch_assoc($result);
	
	if($rows_count>0)
	{
	$_SESSION['username']=$admin_name;
    if(password_verify($admin_password,$rows_data['admin_password']))
	{
    echo "<script>alert('Login Successful')</script>";
    echo "<script>window.open('index.php','_self')</script>";
	}
	else 
	{
	echo "<script>alert('Invalid Credentials')</script>";
	}
	}
	else 
	{
	echo "<script>alert('Invalid Credentials')</script>";
	}


}

?>