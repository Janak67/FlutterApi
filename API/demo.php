<?php
    include("../connection.php");
    
    $data = file_get_contents("https://www.w3schools.com/php/func_filesystem_file_get_contents.asp");
    echo $data;
?>