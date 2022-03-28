<?php
include('../dbconnection.php');
if(isset($_POST['insert_cat']))
{
    $category_title=$_POST['cat_title'];

//select only 1 item
$select_query="select * from categories where category_title='$category_title' ";
$result_select=mysqli_query($con,$select_query);
$number=mysqli_num_rows($result_select);
if($number>0){
    echo"<script>alert(' already present') </script>";

}
else{

    $insert_query="insert into categories(category_title)values('$category_title')";
    $result=mysqli_query($con,$insert_query);
    if($result){
        echo"<script>alert('category inserted') </script>";
    }
}
}
?>

<h2 class="text-center">Insert categories</h2>
<form action="" method="POST" class="mb-2">
<div class="input-group w-90 mb-2">
    <span class="input-group-text" id="basic-addon1">

    </span>
    <input type="text" class="form-control" name="cat_title" placeholder="Insert categories"
    aria-label="uesrname" aria-describedby="basic-addon1">
</div>

<div class="input-group w-10 mb-2 m-auto">

    <input type="submit" class=" bg-info p-2 m-2 border-0" name="insert_cat" value="insert categories">
</div>

</form>