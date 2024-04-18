<?php
    include('connection.php');
    $query = "SELECT * FROM product";
    $res = mysqli_query($conn,$query);

     //Delete
 
     if(isset($_GET['id']))
     {
         $id =$_GET['id'];
         $queryDelete = "DELETE FROM product WHERE id='$id'" ;
         mysqli_query($conn,$queryDelete);
         header("Location:product.php");
     }
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <style>
        body {
        background-image: url('https://c0.wallpaperflare.com/preview/907/573/217/buy-shopping-cart-keyboard-online.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        }
    </style>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Prize</th>
                <th>Qty</th>
                <th>Rate</th>
                <th>Category</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>

            <?php while($arr = mysqli_fetch_assoc($res)) { ?>
                <tr>
                    <td><?php print($arr['id']); ?></td>
                    <td><?php print($arr['name']); ?></td>
                    <td><?php print($arr['prize']); ?></td>
                    <td><?php print($arr['qty']); ?></td>
                    <td><?php print($arr['rate']); ?></td>
                    <td><?php print($arr['category']); ?></td>
                    <td><a href="/FLUTTERAPI/update.php?id=<?php print($arr['id']);?>">Update</a></td>
                    <td><a href="/FLUTTERAPI/product.php?id=<?php print($arr['id']);?>">delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>