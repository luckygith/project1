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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/product.css">
    <style>
.cart_img{
    width:50px;
    height:50px;

}
        </style>
</head>
<body>
<div class="container-fluid m-0 p-0">
<nav class="navbar-exapand-lg navbar-dark bg-primary p-0">
<ul class="navbar-nav me-auto align-items-center">
<li class="nav-item">
<a class="nav-link " href="main.php"><h2>Home</h2></a></li>

</ul>
</nav>
</div>

<div class="container m-4">
<div class="row">
    <form action="" method="POST">
    <table class="table table-bordered text-center">
<thead>
    <tr>
        <th>Product Title</th>
        <th>product image</th>
        <th>quantity</th>
        <th>Price</th>
        <th>remove</th>
        <th colspan="2">operations</th>
    </tr>
</thead>

<tbody>

<!--dyn-->

<?php

$get_ip_add=getIPAddress();
$total=0;
$cart_query="select * from cart where ip_address='$get_ip_add'";
$result=mysqli_query($con,$cart_query);

while($row=mysqli_fetch_array($result)){
    $product_id=$row['product_id'];
    $select_products="select * from products where product_id='$product_id'";
    $result_product=mysqli_query($con,$select_products);

    while($row_product_price=mysqli_fetch_array($result_product)){
$product_price=array($row_product_price['product_price']);

//single product price
$price_table=$row_product_price['product_price'];
$product_title=$row_product_price['product_title'];
$product_image1=$row_product_price['product_image1'];



$product_values=array_sum($product_price);
$total+=$product_values;

    ?>
    

    <tr>
        <td><?php echo $product_title?></td>
        <td><img src="./images/<?php echo $product_image1?>" alt="" class="cart_img"></td>
        <td> <input type="text" name="qty" id="" class="form-input w-50"></td>
        

<!--qty-->
<?php

$get_ip_add=getIPAddress();
if(isset($_POST['update_cart'])){
    $quantities=$_POST['qty'];
    $total=$total*$quantities;
    $update_cart="update cart set quantity=$quantities where ip_address='$get_ip_add'";
    $result_products_quantity=mysqli_query($con,$update_cart);
    
}




?>
<td><?php echo $price_table?></td>
        <td><input type="checkbox" name="removeitem[]" vlaue="<?php  echo $product_id ?>"></td>
        <td>
            <a href="cart.php?delete=<?php echo $row['product_id'];?>" class="btn btn-info" name="delete">Delete</a>
            
            <input type="submit" value="update cart" class="bg-info px-0  border-1 mx-0" name="update_cart">

            
            
</td>
    </tr>
   
    <?php    
}}?>
</tbody>

</table>
<!--total-->
<div class="d-flex mb-5">
    <h4 class="px-3"> Subtotal:<strong class="text-success"> <?php echo $total ?></strong></h4>
<button><a href="product.php">Continue Shopping</a></button>
</div>
</div>
</div>
    </form>

<!--remove-->
<?php

if(isset($_GET['delete'])){
    $product_id=$_GET['delete'];
    $delete_query="delete from cart where product_id=$product_id";
    $run_delete=mysqli_query($con,$delete_query);
    if($run_delete){
        echo "<script>window.open('cart.php'.'_self)</script>";
    }
}

?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>