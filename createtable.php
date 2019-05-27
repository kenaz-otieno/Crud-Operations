<?php
$conn = mysqli_connect("localhost", "root", "","myData");
 
// check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// create table
$sql = "CREATE TABLE DATA1(
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(30) NOT NULL,
    lname VARCHAR(30) NOT NULL
)";
if(mysqli_query($conn, $sql)){
    echo "Table created successfully";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// close connection
mysqli_close($conn);
?>