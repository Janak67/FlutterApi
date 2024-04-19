<?php

    include("../connection.php");

    $id = $_POST['id'];

    if($id != null)
    {
        $query = "DELETE FROM product WHERE `id` = '$id'";
        $res = mysqli_query($conn,$query);
        if($res)
        {
            $msg = array('status'=>'Success');
            echo json_encode($msg);
        }
        else
        {
            $msg = array('status'=>'Failed');
            echo json_encode($msg);
        }
    }
    else
    {
        $msg = array('status'=>'Key not Exits');
        echo json_encode($msg);
    }
?>