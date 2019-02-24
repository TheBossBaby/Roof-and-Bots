<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "hackathon";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

$sql = "SELECT * FROM products";

$output = mysqli_query($conn,$sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>

    </style>
</head>

<body>
    <div class="alert alert-secondary">
        <h1>Product List</h1>
    </div>

    <div>
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">S No</th>
                    <th scope="col">Product Id</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Location</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    if (mysqli_num_rows($output) > 0) {
                      
                      $p_number = 1;
                      while($data = mysqli_fetch_assoc($output)) {
                        echo "<tr>";
                        echo "<td>".$p_number ."</td>";
                        echo "<td>".$data['product_id']."</td>";
                        echo "<td>".$data['product_name']."</td>";
                        echo "<td>".$data['quantity']."</td>";
                        echo "<td>".$data['product_location']."</td>";
                        echo "</tr>";
                        $p_number++;
                      }
                    }
                    else{
                        echo "No data Available";
                    }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>
