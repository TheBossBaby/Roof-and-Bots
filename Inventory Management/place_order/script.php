<?php

$server = "localhost";
$username = 'root';
$password = "";
$dbname = "hackathon";

$conn = mysqli_connect($server,$username,$password,$dbname);

if(!$conn){
    die("connection failed : " . mysqli_connect_error());
}

$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];

$sql = "SELECT quantity FROM products WHERE product_id = '$product_id'";
$output = mysqli_query($conn,$sql);

$result = mysqli_fetch_assoc($output);

foreach($result as $q){
    if($q >= $quantity){
        $quantity = $q - $quantity;
    }
    else{
        echo "Product is out of stock ";
        echo  $quantity." Product remaining";
    }
}

$sql = "UPDATE products 
        SET quantity = '$quantity'
        WHERE product_id = '$product_id'";
mysqli_query($conn,$sql);
?>