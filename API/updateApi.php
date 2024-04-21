<?php

    include("../connection.php");

    $id = $_POST['id'];
    $name = $_POST['name'];
    $prize = $_POST['prize'];
    $qty = $_POST['qty'];
    $rate = $_POST['rate'];
    $category = $_POST['category'];

    if($id!=null&&$name!=null&&$prize!=null&&$qty!=null&&$rate!=null&&$category!=null)
    {
        $query =  "UPDATE product SET(`name`='$name',`prize`='$prize',`qty`='$qty',`rate`='$rate',`category`='$category') WHERE `id`='$id'";
        $result = mysqli_query($conn,$query);
    
        if($result)
        {
          echo "Succesfully Data Update";
          header("index.php");
        }
        else
        {
          echo "Failed to Data Update";
        }
    }
    
?>