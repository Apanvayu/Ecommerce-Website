<?php
include('../admin_area/includes/connect.php');
include('../admin_area/functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Registration</title>
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
    <h2 class="text-center mb-5">Admin Registration</h2>
    <div class="row d-flex justify-content-center">
    <div class="col-lg-3">
    <img src="../images/adminreg.jpg" alt="Admin Registration" class="img-fluid">
    </div>
    <div class="col-lg-6">
    <form action="" method="post">
    <div class="form-outline mb-4">
    <label for="admin_name" class="form-label">Username</label>
    <input type="text" id="admin_name" name="admin_name" placeholder="Enter your Username" required="required" class="form-control">
    </div>
        <div class="form-outline mb-4">
    <label for="admin_email" class="form-label">Email</label>
    <input type="email" id="admin_email" name="admin_email" placeholder="Enter your Email" required="required" class="form-control">
    </div>
     <div class="form-outline mb-4">
    <label for="admin_password" class="form-label">Password</label>
    <input type="password" id="admin_password" name="admin_password" placeholder="Enter your Password" required="required" class="form-control">
    </div>
     <div class="form-outline mb-4">
    <label for="confirm_password" class="form-label">Confirm Password</label>
    <input type="password" id="confirm_password" name="confirm_password" placeholder="Enter your Confirm Password" required="required" class="form-control">
    </div>
    <div>
    <input type="submit" class="bg-info py-2 px-3 border-0" name="admin_register" value="Register">
    <p class="small fw-bold mt-2 pt-1">Do you already have an account ? <a href="admin_login.php" class="link-danger">Login</a></p>
    </div>
    </form>
    </div>
    </div>
    </div>
  </body>
</html>


<!--Php Code-->
<?php
if(isset($_POST['admin_register']))
{
	
	$admin_name=$_POST['admin_name'];
	$admin_email=$_POST['admin_email'];
	$admin_password=$_POST['admin_password'];
	$hash_password=password_hash($admin_password,PASSWORD_DEFAULT);
	$conf_admin_password=$_POST['confirm_password'];
	

	//select query
	$select_query="Select * from admin_table where admin_name='$admin_name' or admin_email='$admin_email'";
	$result=mysqli_query($con,$select_query);
	$rows_count=mysqli_num_rows($result);
	if($rows_count>0)
	{
      echo "<script>alert('Admin- and Email already exist')</script>";
	}
	else if($admin_password!=$conf_admin_password)
	{
     echo "<script>alert('Password do not match')</script>";
	}
	else 
	{
	//insert_query
	
	$insert_query="insert into admin_table (admin_name,admin_email,admin_password) values ('$admin_name','$admin_email','$hash_password')";
	$sql_execute=mysqli_query($con,$insert_query);
    echo "<script>alert('Admin registered successfully')</script>";
	}




}
?>