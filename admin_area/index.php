<!--connect file-->
<?php

include('../admin_area/includes/connect.php');
include('../admin_area/functions/common_function.php');
session_start();

?>

<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard</title>
<!--bootstrap css link-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


<!--font-awesome link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<!-- CSS FILE -->
<link rel="stylesheet" href="../style.css">
<style>
.admin_image {
    width: 100px;
    object-fit: contain;
}
.footer{
    position:absolute;
    bottom:0;
}
body{
    overflow-x:hidden;
}
.product_img{
    width:100px;
    object-fit: contain;
}
</style>
</head>
<body>
<!--navbar-->
<div class="container-fluid p-0">
<!--first child-->
<nav class="navbar navbar-expand-lg navbar-light bg-info">
<div class="container-fluid">
<img src="../images/logo.png" alt="" class="logo">
<nav class="navbar navbar-expand-lg">
<ul class="navbar-nav">
        <li class="nav-item">
        <a href="index.php" class="nav-link">Welcome User</a>
        </li>
        </ul>

</nav>
</div>
</nav>
<!--second child-->
<div class="bg-light">
<h3 class="text-center p-1">Manage Details</h3>
</div>

<!--third child-->
<div class="row">
<div class="col-md-20 bg-secondary p-0 d-flex align-items-center">
<div class="p-3">
<a href="#"><img src="../images/pineapple.jpg" alt="" class="admin_image"></a>
<p class="text-light text-center">Admin Name</p>
</div>

<!--button*10>a.nav-link.text-light.bg-info.my-1 -->

<div class=" button text-center " role="group">
<button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert Products</a></button>

<button><a href="index.php?view_products" class="nav-link text-light bg-info my-1">View Products</a></button>

<button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>

<button><a href="index.php?view_categories" class="nav-link text-light bg-info my-1">View Categories</a></button>

<button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brands</a></button>

<button><a href="index.php?view_brands" class="nav-link text-light bg-info my-1">View Brands</a></button>

<button><a href="index.php?list_orders" class="nav-link text-light bg-info my-1">All Orders</a></button>

<button><a href="index.php?list_payments" class="nav-link text-light bg-info my-1">All Payments</a></button>

<button><a href="index.php?list_users" class="nav-link text-light bg-info my-1">List Users</a></button>

<button><a href="logout.php" class="nav-link text-light bg-info my-1">Logout</a></button>
</div>
</div>
</div>


<!--second child-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<ul class="navbar-nav me-auto">

<?php
if(!isset($_SESSION['username']))
{
    echo "<li class='nav-item'>
<a class='nav-link' href='#'>Welcome Guest</a>
</li>";
}
else 
   {
    echo "<li class='nav-item'>
<a class='nav-link' href='#'>Welcome ".$_SESSION['username']."</a>
</li>";
	}

if(!isset($_SESSION['username']))
{
    echo "<li class='nav-item'>
<a class='nav-link' href='./admin_login.php'>Login</a>
</li>";
}
else 
   {
    echo "<li class='nav-item'>
<a class='nav-link' href='./logout.php'>Logout</a>
</li>";
	}

?>

</ul>
</nav>

<!-- fourth child-->
<div class="container my-3">
<?php
if(isset($_GET['insert_category'])){
    include('insert_categories.php');
}
if(isset($_GET['insert_brand'])){
    include('insert_brands.php');
}
if(isset($_GET['view_products'])){
    include('view_products.php');
}
if(isset($_GET['edit_products'])){
    include('edit_products.php');
}
if(isset($_GET['delete_product'])){
    include('delete_product.php');
}
if(isset($_GET['view_categories'])){
    include('view_categories.php');
}
if(isset($_GET['view_brands'])){
    include('view_brands.php');
}
if(isset($_GET['edit_category'])){
    include('edit_category.php');
}
if(isset($_GET['edit_brands'])){
    include('edit_brands.php');
}
if(isset($_GET['delete_category'])){
    include('delete_category.php');
}
if(isset($_GET['delete_brands'])){
    include('delete_brands.php');
}
if(isset($_GET['list_orders'])){
    include('list_orders.php');
}
if(isset($_GET['list_payments'])){
    include('list_payments.php');
}
if(isset($_GET['list_users'])){
    include('list_users.php');
}
?>
</div>




</ul>
</nav>

<!--third child-->
<div class="bg-light">
<h3 class="text-center">GoodsnFoods Store</h3>
<p class="text-center">Communication is at the heart of the e-commerce and community</p>
</div>


</ul>

</div>
</div>

<!-- fourth child-->
       
        <?php

       $admin_name=$_SESSION['username'];
       
      
      

        ?>

</div>
</div>








<!-- last child-->
<?php include('../admin_area/includes/footer.php') ?>
</div>

</div>
<!--bootstrap js link-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>s

</body>
</html>
