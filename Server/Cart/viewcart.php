<?php

    require_once("database.php");
    $query = " select * from product";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Cart</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                                <td>Product ID</td>
                                <td>Product Name</td>
                                <td>Product Quantity </td>
                                <td>Buy Now</td>
                                <td>Remove</td>
                            </tr>

                            <?php

                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $product_id = $row['product_id'];
                                        $product_name= $row['product_name'];
                                        $product_quantity= $row['product_quantity'];
                            ?>
                                    <tr>
                                        <td><?php echo $product_id ?></td>
                                        <td><?php echo $product_name ?></td>
                                        <td><?php echo $product_quantity ?></td>
                                        <td><a href="#" class="btn btn-pencil">Buy Now</a></td>
                                        <td><a href="#" class="btn btn-danger">Remove</a></td>
                                    </tr>
                            <?php
                                    }
                            ?>


                        </table>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>
