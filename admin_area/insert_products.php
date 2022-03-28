<?php
include('../dbconnection.php');

if(isset($_POST['insert_product'])){
    $product_title=$_POST['product_title'];
    $product_description=$_POST['product_description'];
    $product_keyword=$_POST['product_keyword'];
    $product_category=$_POST['product_category'];
    $product_image1=$_FILES['product_image1']['name'];
    $product_price=$_POST['product_price'];
    $status='true';
    
    move_uploaded_file($_FILES["product_image1"]["tmp_name"],"images/".$_FILES["product_image1"]["name"]);                
     $query="insert into products (product_title,product_description,product_keyword,category_id,product_image1,product_price,status) values ('$product_title','$product_description','$product_keyword','$product_category','$product_image1','$product_price','$status')";
$query_run=mysqli_query($con,$query);
if($query_run){
    
    echo"<script>alert('inserted')</script>";
}
else{
    echo"<script>alert('something went wrong')</script>";
    header('location: insert_products.php');
     exit(0);
}

   


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="css/ap.css">
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>

        <!--form-->
        <form action="" method="POST" enctype="multipart/form-data">
        <!--title-->   
        <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="enter product title" autocomplete="off" >
            </div>

<!--description-->

<div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="product_description" id="product_description" class="form-control" placeholder="enter description" autocomplete="off" >
            </div>
<!--keywords-->
<div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keyword" class="form-label">Product keywords</label>
                <input type="text" name="product_keyword" id="product_keyword" class="form-control" placeholder="enter product title" autocomplete="off" >
            </div>

            <!--category-->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_category" id="" class="form-select">
<option value="">select a category</option>
<?php
$select_query="select * from categories";
$result_query=mysqli_query($con,$select_query);
while($row=mysqli_fetch_assoc($result_query)){
    $category_title=$row['category_title'];
    $category_id=$row['category_id'];
    echo "<option value='$category_id'>$category_title</option>";
}
?>

                </select>
            </div>

            <!--image1-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Insert image1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" >
            </div>

 
 

<!--price-->
<div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="enter product price" autocomplete="off">
            </div>

<div class="form-outline mb-4 w-50 m-auto">
    <input type="submit" name="insert_product" class="btn btn-success mb-3 px-3" value="insert products" >

<button><a href="index.php" class="nav-link text-light bg-info my-1">Back</a></button>
</div>        
</form>

    </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
