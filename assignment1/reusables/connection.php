<?php
$connect = mysqli_connect('localhost','root','','http5225assignment1');
if(!$connect){
    echo "Error occured.";
    echo "Error code: " . mysqli_connect_errno();
    echo "Error: " . mysqli_connect_error();
    exit;
}
?>
