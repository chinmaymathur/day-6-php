<?php
// insert data into php
$servername = "localhost";
$username = "root";
$password = "";
$database = "chinmay"; 
// for creating a connection object 
$conn = mysqli_connect($servername,$username,$password,$database);
if (!$conn){
    die("sorry we failed to connect: ". mysqli_connect_error());
}
else{
echo "Connection was successful";
}
//sql query 
$sql = "INSERT INTO `phptrip` (`name`, `dest`) VALUES ( 'shubham', 'Bihar')";
$result = mysqli_query($conn, $sql);
// add a trip table in database 
if($result){
    echo "The record was inserted  successfully<br>";

}
else{
    echo "The record was  not inserted  successfully because of this error---->". mysqli_error
    ($conn);    
}


?>
