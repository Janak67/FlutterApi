<?php
    include('connection.php');

    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $rate = $_POST['rate'];
        $qty = $_POST['qty'];
        $prize = $_POST['prize'];
        $category = $_POST['category'];
    
        $query =  "INSERT INTO product (`name`,`prize`,`qty`,`rate`,`category`) VALUES ('$name','$prize','$qty','$rate','$category')";
        $result = mysqli_query($conn,$query);
    
        if($result)
        {
          echo "Succesfully add data";
          header("index.php");
        }
        else
        {
          echo "Failed to add data";
        }
        
      }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Shopping</title>
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
    <h1>Product</h1>
    <a href="/FLUTTERAPI/product.php">Product</a>

    <form method ="post" style="padding:20px">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Product Name</label>
        <input type="Product Name" class="form-control" name="name" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Product Prize</label>
        <input type="number" class="form-control" name="prize">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Product Qty</label>
        <input type="number" class="form-control" name="qty">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Product Rate</label>
        <input type="text" class="form-control" name="rate">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Product Category</label>
        <input type="text" class="form-control" name="category">
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>