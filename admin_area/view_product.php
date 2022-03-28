<?php
session_start();
include('../dbconnection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products view</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{
            margin:0px;
        }
h1{
    text-align:center;
    font-family:poppins;
    color:blue;
    background:white;
}
.header{
    font-family:poppins;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:0px 30px;
    background-color:#204969;
}
.header a{
    background-color:#f0f0f0;
    font-size:16px;
    font-weight:550;
    padding:8px 12px;
    border:2px solid black;
}

h3{
    color:black;
    text-align:center;
}


table{
    border-collapse:collapse;
    width:100%;
    color:black;
    font-family:monospace;
    font-size:15px;
    text-align:center;
    
    
}
th{
    background-color:black;
    color:black;
}
tr:nth-child(even){background-color:grey}
        </style>
</head>
<body>
    <div class="header">
    <h1>ADMIN<?php echo $_SESSION['id']?></h1>
<form >
    <a href="index.php">LOGOUT</a>
    
</form>
</div>


<h1 class="text-center my-4">Products info</h1>
<div class="container mt-5 text-align-center" >
    <table class="table table-bordered w-70 table-sriped table-hover bg-light ">
        <thead>
<tr>
<th scope="col">Id</th>
<th scope="col">Title</th>
<th>category id</th>
<th>price</th>
</tr>
</thead>


<thead>
<tbody>
    <?php
$sql="select product_id,product_title,category_id,product_price from  products";
$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_assoc($result)){
    $id=$row['product_id'];
    $title=$row['product_title'];
    $category=$row['category_id'];
    $price=$row['product_price'];
    echo'<tr>  
    <td>'.$id.' </td>
    <td>'.$title.' </td>   
    <td>'.$category.' </td>
    <td>'.$price.' </td>
    
    </tr>';

    
}



    ?>




</tbody>
</thead>
   

</table>
</div>







</body>
</html>