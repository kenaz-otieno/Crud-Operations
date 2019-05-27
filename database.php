<?php
$conn = mysqli_connect("localhost", "root", "");
 
// check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// create database
$sql = "CREATE DATABASE myData";
if(mysqli_query($conn, $sql)){
    echo "Database created successfully";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// close connection
mysqli_close($conn);
?>