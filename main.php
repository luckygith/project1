<?php
include('dbconnection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/main.css">

</head>
<body>
<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="bi bi-arrow-90deg-right"></i>
</label>
<label class="bi bi-github" >
<h1 title="welcome">Hello </h1></label>

<ul>
<li><span class="bi bi-house" ><span>
    <a  class="active"href="index.php">Home</a></li>
<li><span class="bi bi-chevron-compact-right" ></span>
    <a href="#category">Category</a></li>
<li><span class="bi bi-calendar" ></span>
    <a href="#deal">Deals</a></li>
   <li><span class="bi bi-person"></span> 
       <a href="userlogin.php">Login</a></li>
</ul>
</nav>
<h1>welcome</h1>

<section class="home">
<div class="banner">
<div class="box" style="background:url(images/banner.jpeg) no-repeat;">
<div class="content">
    <span></span>
<h3>"What you plant today</br>you will harvest</br>tomorrow"</h3>
<a href="product.php" class="btn">shop now</a>
</div>
</div>
</div>
</section>
<!--category-->
<section class="category" id="category">
<h1 class="heading">shop by category</h1>
<div class="box-container">
<div class="box">
<img src="images/1p.jpeg" alt="">
<div class="content">
    <h3>Plants</h3>
<a href="product.php" class="btn">shop now</a>
</div>
</div>

<div class="box">
<img src="images/1f.jpeg" alt="">
<div class="content">
    <h3>Flowers</h3>
<a href="product.php" class="btn">shop now</a>
</div>
</div>
</div>
</section>
<!-- future products-->

<section class="products" id="product">
<h1 class="heading">Future Products</h1>
<div class="box-container">
<div class="box">
<span class="discount">-10%</span>
<img src="images/1p.jpeg" alt="">
<h3>latest</h3>
<div class="stars">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<div class="quantity">
<span>quantity:</span>
<input type="number" min="1" max="100" value="1">
</div>
<div class="price">&#8377 100/</span>&#8377 200</sapn></div>
<a href="#" class="btn">add to cart</a>
</div>

<div class="box">
<span class="discount">-10%</span>
<img src="images/1f.jpeg" alt="">
<h3>latest</h3>
<div class="stars">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<div class="quantity">
<span>quantity:</span>
<input type="number" min="1" max="100" value="1">
</div>
<div class="price">&#8377 100/</span>&#8377 200</sapn></div>
<a href="#" class="btn">add to cart</a>
</div>

<div class="box">
<span class="discount">-10%</span>
<img src="images/2p.jpeg" alt="">
<h3>latest</h3>
<div class="stars">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<div class="quantity">
<span>quantity:</span>
<input type="number" min="1" max="100" value="1">
</div>
<div class="price">&#8377 100/</span>&#8377 200</sapn></div>
<a href="#" class="btn">add to cart</a>
</div>

<div class="box">
<span class="discount">-10%</span>
<img src="images/2f.jpeg" alt="">
<h3>latest</h3>
<div class="stars">
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-fill"></i>
<i class="bi bi-star-half"></i>
</div>
<div class="quantity">
<span>quantity:</span>
<input type="number" min="1" max="100" value="1">
</div>
<div class="price">&#8377 100/</span>&#8377 200</sapn></div>
<a href="#" class="btn">add to cart</a>
</div>

</div>
</section>

<section class="deal" id="deal">
<h1 class="heading">Deals</h1>
<div class="row">
<div class="content">
<h3 class="title">Don't miss it</h3>
<p>Save your money</p>
<div class="count-down">
<div class="box">
<h3 id="day">00</h3>
<span>Day</span>
</div>

<div class="box">
<h3 id="hour">00</h3>
<span>Hour</span>
</div>

<div class="box">
<h3 id="minute">00</h3>
<span>minute</span>
</div>

<div class="box">
<h3 id="second">00</h3>
<span>second</span>
</div>

</div>
<a href="#" class="btn">check out deal</a>
</div>
</div>
</section>
<script src="js/userlogin.js"></script>

<div class="footer">
<h2 >&copy;Created by:<span>Lakshmi</span>  / all rights reserved!</h2>
</div>
</body>
</html>