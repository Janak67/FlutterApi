<?php

    include("../connection.php");

    $imagePath = "../image/";
    
    @$image = $_FILES['image'];
    @$imgName = $image['name'];
    @$path = $image['tmp_name'];
    @$uploadFile = $imagePath.basename($imgName);

    move_uploaded_file($path,$uploadFile);
    
    // $name = $_POST['name'];
    // $prize = $_POST['prize'];
    // $qty = $_POST['qty'];
    // $category = $_POST['category'];
    // $rate = $_POST['rate'];
    
    // if(isset($_POST['name'], $_POST['prize'], $_POST['qty'], $_POST['category'], $_POST['rate']))
    // {

    //     $query = "INSERT INTO `product` (`name`,`prize`,`qty`,`rate`,`category`,`image`) VALUES ('$name','$prize','$qty','$rate','$category','$imgName')";
    //     $res = mysqli_query($conn, $query);

    //     if($res)
    //     {
    //         $msg = array('status'=>'Success');
    //         echo json_encode($msg);
    //         http_response_code(200);
    //     }
    //     else
    //     {
    //         $msg = array('status'=>'Failed');
    //         echo json_encode($msg);
    //         http_response_code(400);
    //     }
    // }
    // else
    // {
    //     $msg = array('status'=>'Key not Exists');
    //     echo json_encode($msg);
    //     http_response_code(404);
    // }

?>