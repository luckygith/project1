<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view cat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{
            margin:0px;
        }
h1{
    text-align:center;
    font-family:poppins;
    color:white;
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
    color:pink;
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


<div class="container">
    <h3>category Information</h3>

    

    <table>
        <tr>
            <th>Id</th>
            
            <th>Title</th>

</tr>
</div>
<?php


$conn=mysqli_connect("localhost","root","","project");
if($conn->connect_error){
    die("connection failed".$conn->connect_error);

}
$sql="select category_id,category_title from categories";
$result=$conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row['category_id']."</td><td>".$row['category_title']."</td></tr>";

    }
    echo "</table>";
}
else{
    echo"0 result";
}
$conn->close();

?>
</table>


</body>
</html>