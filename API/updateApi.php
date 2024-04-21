<?php

    include("../connection.php");

    if(isset($_POST['id'], $_POST['name'], $_POST['prize'], $_POST['qty'], $_POST['category'], $_POST['rate']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $prize = $_POST['prize'];
        $qty = $_POST['qty'];
        $category = $_POST['category'];
        $rate = $_POST['rate'];

        $query = "UPDATE product SET name='$name', prize='$prize', qty='$qty', rate='$rate', category='$category' WHERE id='$id'";
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
    else
    {
        $msg = array('status'=>'Key not Exists');
        echo json_encode($msg);
        http_response_code(404);
    }

?>