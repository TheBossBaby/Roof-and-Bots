<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+SC:900|Noto+Serif:700|Oswald" rel="stylesheet">
    <style type="text/css">
        button {
            margin-left: 45%;
            margin-top: 10px;
            margin-bottom: 20px;
            width: 200px;
        }

        .container {
            background: #5CDB95;

            margin-top: 8%;
            padding-top: 30px;
            width: 40%;
            border-radius: 10%;


        }

        h1 {
            margin-left: 20%;
            margin-bottom: 40px;
            font-family: Noto-serif;
            font-size: 66;
            font-weight: 700;

        }

        body {
            //   background: #05386B;
            background: #0575E6;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to bottom, #021B79, #0575E6);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to bottom, #021B79, #0575E6);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }

        .form-group {

            font-weight: 900;
            font-size: 17;
            padding-left: 40px;

        }

    </style>
</head>

<body>
    <div class="container .bg-secondary">
        <h1>Place order</h1>
        <form method = "POST" action = "script.php">
            <div class="form-group row">
                <label for="prod_id" class="col-sm-4 col-form-label">Product ID</label>
                <div class="col-sm-7">
                    <input type="text" name="product_id" class="form-control" id="prod_id" placeholder="Product ID">
                </div>
            </div>


            <div class="form-group row">
                <label for="prod_quan" class="col-sm-4 col-form-label">Quantity</label>
                <div class="col-sm-7">
                    <input type="text" name="quantity" class="form-control" id="prod_quan" placeholder="Product Quantity">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-7">
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
