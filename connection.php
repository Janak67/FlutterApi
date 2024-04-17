<?php
    $SERVERNAME = "localhost";
    $USERNAME = "root";
    $PASSWORD = "";
    $DBNAME = "shopnow";

    $conn = mysqli_connect($SERVERNAME,$USERNAME,$PASSWORD,$DBNAME);

    if($conn)
    {
        echo "Successfully connection";
    }
    else
    {
        echo "Failed connection";
    }
?>