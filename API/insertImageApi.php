<?php

    include("../connection.php");

    $imagePath = "../image/";
    
    @$image = $_FILES['image'];
    
    @$name = $_POST['name'];
    @$prize = $_POST['prize'];
    @$qty = $_POST['qty'];
    @$category = $_POST['category'];
    @$rate = $_POST['rate'];
    
    if($name!=null && $prize!=null && $qty!=null && $category!=null && $rate!=null && $image!=null)
    {
        @$imgName = $image['name'];
        @$path = $image['tmp_name'];
        @$uploadFile = $imagePath.basename($imgName);

        $resp = move_uploaded_file($path,$uploadFile);
        if($resp)
        {
            $query = "INSERT INTO `product` (`name`,`prize`,`qty`,`rate`,`category`,`image`) VALUES ('$name','$prize','$qty','$rate','$category','$imgName')";
            $res = mysqli_query($conn, $query);

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
    }
    else
    {
        $msg = array('status'=>'Key not Exists');
        echo json_encode($msg);
        http_response_code(404);
    }

?>