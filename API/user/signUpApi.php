<?php

    include("../../connection.php");
    
    //Registration
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($name != null && $email != null && $password != null)
    {
        $readQuery = "SELECT * FROM user WHERE `email`='$email'";
        $data = mysqli_query($conn,$readQuery);

        if(mysqli_num_rows($data)==0)
        {
            $pass = password_hash($password,PASSWORD_DEFAULT);

            $query = "INSERT INTO `user`(`name`, `email`, `password`) VALUES ('$name','$email','$pass')";
            $res = mysqli_query($conn,$query);
            if($res)
            {
                $msg = array('status'=>"SuccessFully");
                echo json_encode($msg);
                http_response_code(200);
            }
            else
            {
                $msg = array('status'=>"Failed");
                echo json_encode($msg);
                http_response_code(400);
            }
        }
        else
        {
            $msg = array('status'=>"All ready Register");
            echo json_encode($msg);
            http_response_code(400);
        }
    }
    else
    {
        $msg = array('status'=>'Key not Exits');
        echo json_encode($msg);
        http_response_code(404);
    }
?>