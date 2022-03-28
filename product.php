<?php
include('dbconnection.php');
include('function.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/product.css">
</head>
<body>
<div class="conatiner-fluid "> 
<nav class="navbar-exapand-lg navbar-dark bg-primary p-0">
<ul class="navbar-nav me-auto align-items-center">
<li class="nav-item">
<a class="nav-link " href="main.php"><h2>Home</h2></a></li>
<li class="nav-item">

<a class="nav-link d-flex" href="cart.php"><span class="bi bi-bag"></span><sup><?php cart_item(); ?><sup></a>
</i>
<li>
<a class="nav-link" href="#">Total price:<?php total_cart_price();?></a>
</li>
<li class="nav-item d-flex">
<form class="d-flex" action="search.php" method="GET">
<input class="form-control m-0" type="search" placeholder="search" name="search_data">
<input type="submit" value="search" class="btn btn-outline-light" name="search_data_product">
</form>
</li>
</ul>

</nav>

<div class="row">
 
<!--cat-->
<div class="col-md-2 bg-secondary p-0">
<ul class="navbar-nav me-auto text-center">
    
<li class="nav-item bg-info">
        <a href="#" class="nav-link text-light">Categories</a>
    </li>
<?php
$select_categories="select * from categories";
$result_categories=mysqli_query($con,$select_categories);
while($row_data=mysqli_fetch_assoc($result_categories)){
  $category_title=$row_data['category_title'];
  $category_id=$row_data['category_id'];
  echo"<li class='nav-item'>
  <a href='product.php?category=$category_id' class='nav-link text-light'>$category_title</a>
  </li>";
}





?>
    
</ul>
</div>

<!--pro-->
<div class="col-md-10">
<div class="row">

<?php
//get products
//condition to check isset r not

if(!isset($_GET['category'])){

$select_query="select * from products";
$result_query=mysqli_query($con,$select_query);

while($row=mysqli_fetch_assoc($result_query)){
$product_id=$row['product_id'];
$product_title=$row['product_title'];
$product_description=$row['product_description'];
$product_image1=$row['product_image1'];
$product_price=$row['product_price'];
$category_id=$row['category_id'];
echo "<div class='col-md-4 mb-2'>
<div class='card m-2' >
  <img src='images/$product_image1' class='card-img-top m-2' alt='...'>
  <div class='card-body'>
    <h5 class='card-title'>$product_title</h5>
    <p class='card-text'>$product_description</p>
    <p class='card-text'>$product_price/-</p>
    <p class='card-text' <h3>&#8377</h3>$product_price</p>
    <a href='product.php?add_to_cart=$product_id' class='btn btn-success'>add to cart</a>
  </div>
</div>
</div>";
}
}


//get unique cat

if(isset($_GET['category'])){
$category_id=$_GET['category'];

  $select_query="select * from products where category_id=$category_id";
  $result_query=mysqli_query($con,$select_query);
  //counting no rows
  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows==0){
    echo "<h2 class='text-center text-danger'>No stock for this category</h2>";
  }
  
  while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  $product_image1=$row['product_image1'];
  $product_price=$row['product_price'];
  $category_id=$row['category_id'];
  echo "<div class='col-md-4 mb-2'>
  <div class='card m-2' >
    <img src='images/$product_image1' class='card-img-top m-2' alt='...'>
    <div class='card-body'>
      <h5 class='card-title'>$product_title</h5>
      <p class='card-text'>$product_description</p>
      <p class='card-text'>$product_price/-</p>
      <p class='card-text' <h3>&#8377</h3>$product_price</p>
      <a href='product.php?add_to_cart=$product_id' class='btn btn-success'>add to cart</a>
    </div>
  </div>
  </div>";
  }
  }

  //search products


if(isset($_GET['search_data_product'])){
$search_data_value=$_GET['search_data'];

  $search_query="select * from products where product_keyword like '%$search_data_value%'";
  $result_query=mysqli_query($con,$search_query);
  
  $count=mysqli_num_rows($result_query);
  if($count==0){
    echo"<script>alert('no res')</script>";
  }else{
  
  
  while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  $product_image1=$row['product_image1'];
  $product_price=$row['product_price'];
  $category_id=$row['category_id'];
  echo "<div class='col-md-4 mb-2'>
  <div class='card m-2' >
    <img src='images/$product_image1' class='card-img-top m-2' alt='...'>
    <div class='card-body'>
      <h5 class='card-title'>$product_title</h5>
      <p class='card-text'>$product_description</p>
      <p class='card-text'>$product_price/-</p>
      <p class='card-text' <h3>&#8377</h3>$product_price</p>
      <a href='product.php?add_to_cart=$product_id' class='btn btn-success'>add to cart</a>
    </div>
  </div>
  </div>";
  }
}
}

//cart functions







//ip
$ip = getIPAddress();  


cart();
?>


<!--row end-->
</div>
<!--col end-->
</div>




</div>



</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>