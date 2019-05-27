<?php 

if(isset($_POST['submit'])){ 
if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){ 
$name=$_POST['name']; 
$link = mysqli_connect("localhost", "root", "", "myData");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 
$sql="SELECT  id, fname, lname FROM DATA1 WHERE fname LIKE '%" . $name .  "%' OR lname LIKE '%" . $name ."%'"; 
$result=mysqli_query($link, $sql);  
while($row=mysqli_fetch_array($result)){ 
$fname  =$row['fname']; 
$lname=$row['lname']; 
$id=$row['id']; 
echo "<ul>\n"; 
echo "<li>" . "<a  href=\"search.php?id=$id\">"   .$fname . " " . $lname .  "</a></li>\n"; 
echo "</ul>"; 
} 
} 
else{ 
echo  "<p>Please enter a search query</p>"; 
} 
} 
?> 