<!--connect file-->
<?php

include('./admin_area/includes/connect.php');
include('./admin_area/functions/common_function.php');
session_start();

?>



<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ecommerce website using PHP and MYSQL.</title>

<!--bootstrap css link-->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<!--font awesome link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- CSS FILE -->
<link rel="stylesheet" href="style.css">
</head>
<body>
<!--navbar-->
<div class="container-fluid p-0">
<!--first child-->
<nav class="navbar navbar-expand-lg navbar-light  bg-info">
  <div class="container-fluid">
    <img src="./images/logo.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registration.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </li><li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item(); ?></sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price:<?php total_cart_price(); ?>/-Rs</a>
        </li>
       
      </ul>
      <form class="d-flex" role="search" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
       <!-- <button class="btn btn-outline-light" type="submit">Search
       </button>-->
       <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
      </form>
    </div>
  </div>
</nav>

<!--calling cart function-->
<?php
cart();
?>

<!--second child-->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
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
<a class='nav-link' href='./users_area/user_login.php'>Login</a>
</li>";
}
else 
   {
    echo "<li class='nav-item'>
<a class='nav-link' href='./users_area/logout.php'>Logout</a>
</li>";
	}

?>

</ul>
</nav>

<!--third child-->
<div class="bg-light">
<h3 class="text-center">GoodsnFoods Store</h3>
<p class="text-center">Communication is at the heart of the e-commerce and community</p>
</div>

<!--fourth child-->
<div class="row px-3">
<div class="col-md-10">
<!--products-->
<div class="row">




<!--fetching products-->
<?php
//calling function
view_details();
get_unique_categories();
get_unique_brands();

?>

<!--<div class="col-md-4 mb-2">
<div class="card">
  <img src="./images/dairymil.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>

</div>-->

<!--row end-->
</div>
<!--col end-->
</div>
<div class="col-md-2 bg-secondary p-0">
<!--brands to be displayed-->
<ul class="navbar-nav me-auto text-center">
<li class="nav-item bg-info">
<a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
</li>
<?php

getbrands();

?>



</ul>

<!--Categories to be displayed-->
<!--sidenav-->
<ul class="navbar-nav me-auto text-center">
<li class="nav-item bg-info">
<a href="#" class="nav-link text-light"><h4>Categories</h4></a>
</li>

<?php

getcategories();
?>

</ul>

</div>
</div>



<!-- last child-->
<div class="bg-info p-3 text-center ">
<p>All rights reserved @-Designed by Prem-2022</p>
</div>
</div>

<!--bootstrap js link-->

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>
