<?php
require_once('dbconnection.php');
if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phonenumber=$_POST['phonenumber'];
    
     $sql="insert into user(name,email,phonenumber) values('$name','$email','$phonenumber')";
    $result=mysqli_query($con,$sql);
    
    if($result){
        echo "<script>alert('login success')</script>";
        
        header("location:main.php");
    }
    else{
    die (mysqli_error($con));
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userlogin</title>
    <link rel="stylesheet" href="css/admin.css">

    
</head>
<body>
<div class="center">
        <h1>LOGIN</h1>
        <div class="form-container">
<form name="form" onclick="return validation()" method="POST">
        <div class="txt">

            <input  type="text" name="name" placeholder="Name">
        <span></span>
        </div>

        <div class="txt">

        <input type="email" name="email" placeholder="Email">
        <span></span>
        </div>

        <div class="txt">

        <input type="text" name="phonenumber" placeholder="phonenumber" > 
        <span></span>
        </div>

   <input type="submit" name="submit" value="LOGIN" >
</form>
</div>
</div>


<script  src="js/userlogin.js"></script>
</body>
</html>