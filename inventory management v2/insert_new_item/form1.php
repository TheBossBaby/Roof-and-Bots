<?php

    $server = "localhost";
    $password = "";
    $username = "root";
    $dbname = "hackathon";

    $conn = mysqli_connect($server,$username,$password,$dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } 


    $product_id = $product_name = $quantity = $location ="";


    if($_SERVER['REQUEST_METHOD']=="POST"){

        $product_id = $_POST["product_id"];
        $product_name = $_POST["product_name"];
        $quantity = $_POST['quantity'];
        $location = $_POST["location"];
    }

    $sql = "SELECT product_name FROM products WHERE product_id = '$product_id'";

    $res = mysqli_query($conn,$sql);

    if(mysqli_num_rows($res)){
        $p_name = mysqli_fetch_assoc($res);

        foreach($p_name as $name)
        echo "Product ID is already reserved for ".$name;
    }
    else{
    $sql = "INSERT INTO products
            values('$product_id','$product_name','$quantity','$location')";
    
    mysqli_query($conn,$sql);

    header('location:index.php');
    }

    
?>