<?php  
    function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  

function cart(){
    if(isset($_GET['add_to_cart'])){
        global $con;

        $get_ip_add=getIPAddress();
        $get_product_id=$_GET['add_to_cart'];

        $select_query="select * from cart where ip_address='$get_ip_add' and product_id=$get_product_id";
        $result_query=mysqli_query($con,$select_query);

        $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows>0){
    echo "<script>alert('already present')</script>";
    echo "<script>window.open('product.php') </script>";
  }else{
      $insert_query="insert into cart(product_id,ip_address,quantity) values('$get_product_id', '$get_ip_add',0)";
      $result_query=mysqli_query($con,$insert_query);
      echo "<script>alert('added to cart')</script>";
      echo "<script>window.open('product.php') </script>";

  }


    }
}

//fun to get cart items

function cart_item(){
    if(isset($_GET['add_to_cart'])){
        global $con;
       $get_ip_add=getIPAddress();
        $select_query="select * from cart where ip_address='$get_ip_add' ";
        $result_query=mysqli_query($con,$select_query);

        $count_cart_item=mysqli_num_rows($result_query);
  
  }else{
    global $con;
    $get_ip_add=getIPAddress();
     $select_query="select * from cart where ip_address='$get_ip_add' ";
     $result_query=mysqli_query($con,$select_query);

     $count_cart_item=mysqli_num_rows($result_query);

  }

echo $count_cart_item;
    
    }
//price
    function total_cart_price(){
global $con;
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
$product_values=array_sum($product_price);
$total+=$product_values;

    }

}
echo $total;

}


?>  
