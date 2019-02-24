<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style type="text/css">
        button {
            margin-left: 55%;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .container {
            background: #5CDB95;
            margin-top: 10%;
            padding-top: 30px;


        }

        h1 {
            margin-left: 35%;
            margin-bottom: 40px;
            font-family: Noto-serif;
            font-size: 66;
            font-weight: 700;

        }

        body {
            background: #05386B;
        }

        .form-group {

            font-weight: 900;
            font-size: 17;
        }

    </style>

</head>

<body>
<div class="container .bg-secondary">
        <h1>Insert new Items</h1>
        <form method="post" action= "form1.php">
            <div class="form-group row">
                <label for="prod_id" class="col-sm-2 col-form-label">Product ID</label>
                <div class="col-sm-10">
                    <input type="text" name = "product_id" class="form-control" id="prod_id" placeholder="Product ID">
                </div>
            </div>
            <div class="form-group row">
                <label for="prod_name" class="col-sm-2 col-form-label">Product Name</label>
                <div class="col-sm-10">
                    <input type="text" name ="product_name" class="form-control" id="prod_name" placeholder="Product Name">
                </div>
            </div>

            <div class="form-group row">
                <label for="prod_quan"  class="col-sm-2 col-form-label">Product Quantity</label>
                <div class="col-sm-10">
                    <input type="text" name="quantity" class="form-control" id="prod_quan" placeholder="Product Quantity">
                </div>
            </div>

            <div class="form-group row">
                <label for="prod_LOC" class="col-sm-2 col-form-label">Product Location</label>
                <div class="col-sm-10">
                    <input type="text" name="location" class="form-control" id="prod_LOC" placeholder="Product Location">
                </div>
            </div>


            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
