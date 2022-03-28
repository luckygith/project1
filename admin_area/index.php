<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="css/ap.css">
</head>
<body>
    <div class="container-fluid p-0">
<nav class="navbar navbar-expand-lg navbar-light bg-success">
<div class="container-fluid">

    <h3>Hello</h3>
<nav class="navbar navbar-expand-lg">
<ul class="navbar-nav">
<li class="nav-item">
    <a href="" class="navlink bg-dark text-light">Welcome</a>

</i>
</ul>
</nav>
</div>
</nav>

<div class="bg-light">
    <h3 class="text-center p-2">Manage Details</h3>
</div>

<div class="row">
    <div class="col-md-12 bg-secondary p-1  align-items-center">
<div class="button text-center">
<button><a href="../ap.php" class="nav-link text-light bg-info my-1">view users</a></button>
    <button><a href="insert_products.php" class="nav-link text-light bg-info my-1">insert products</a></button>
    <button><a href="view_product.php" class="nav-link text-light bg-info my-1">View products</a></button>
    <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert categories</a></button>
    <button><a href="view_cat.php" class="nav-link text-light bg-info my-1">View categories</a></button>
    <button><a href="../index.php" class="nav-link text-light bg-info my-1">Logout</a></button>

</div>
    </div>
</div>
</div>


<!--insert cat-->
<div class="container my-5">
    <?php
if(isset($_GET['insert_category'])){
    include('inser_categories.php');
}
    ?>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>