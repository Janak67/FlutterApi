<?php
    include("../connection.php");

    $query = "SELECT * FROM product";
    $res = mysqli_query($conn,$query);
    $arr = array();

    if(mysqli_num_rows($res)>0)
    {
        while($data = mysqli_fetch_assoc($res))
        {
            $arr[] = $data;
        }
    }
    $json = json_encode($arr,JSON_PRETTY_PRINT);
    echo $json;
?>