<?php
    include("../connection.php");

    $name = $_POST['name'];
    $prize = $_POST['prize'];
    $qty = $_POST['qty'];
    $rate = $_POST['rate'];
    $category = $_POST['category'];

    if($name!=null && $prize!=null && $qty!=null && $rate!=null && $category!=null)
    {
        $query =  "INSERT INTO product (name,prize,qty,rate,category) VALUES ('$name','$prize','$qty','$rate','$category')";
        $res = mysqli_query($conn,$query);
        if($res)
        {
            $msg = array('status'=>'Success');
            echo json_encode($msg);
            http_response_code(200);
        }
        else
        {
            $msg = array('status'=>'Failed');
            echo json_encode($msg);
            http_response_code(400);
        }
    }
    else{
        $msg = array('status'=>'Key not Exits');
        echo json_encode($msg);
        http_response_code(404);
    }
?>