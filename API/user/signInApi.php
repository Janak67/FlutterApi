<?php

    include("../../connection.php");

    @$email = $_POST['email'];
    @$password = $_POST['password'];

    if($email != null && $password != null)
    {
        $query = "SELECT * FROM user WHERE email='$email'";
        $res = mysqli_query($conn,$query);

        if(mysqli_num_rows($res)>0)
        {
            $data = mysqli_fetch_assoc($res);
            if(password_verify($password,$data['password']))
            {
                $msg = array('status'=>'Sign in SuccessFully');
                echo json_encode($msg);
                http_response_code(200);
            }
            else
            {
                $msg = array('status'=>'Invalid Password');
                echo json_encode($msg);
                http_response_code(400);
            }
        }
        else
        {
            $msg = array('status'=>'Please Sign up');
            echo json_encode($msg);
            http_response_code(402);
        }
    }
    else
    {
        $msg = array('status'=>'Key not Exists');
        echo json_encode($msg);
        http_response_code(404);
    }
?>