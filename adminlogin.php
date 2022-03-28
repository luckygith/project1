<?php
require_once('dbconnection.php');
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $sql="select * from admin where name='$name' and email='$email'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result)){
            $id=$row["ID"];
            $email=$row["Email"];
            session_start();
            $_SESSION['id']=$id;
            $_SESSION['email']=$email;
        }
        header("location:admin_area/index.php");
    }
    else{
        
        echo "<script>alert('invalid')</script>";
        
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <div class="center">
        <h1>ADMIN</h1>
<form  method="POST">
        <div class="txt">
            
        <input  type="text" name="name" required >
        <span></span>
        <label>Adminname</label>
    </div>

<div class="txt">
        <input type="email" name="email" required >
        <span></span>
        <label>Email</label>
    </div>

<input type="submit" name="submit" value="LOGIN" >

</form>
</div>
</body>
</html>