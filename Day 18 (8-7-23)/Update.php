<?php
$username="root";
$servername="localhost";
$password="";
$db="myDB1";
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn){
    die("Connection failed".mysqli_connect_error());
    // die function show an error
}
$sql = "UPDATE person4 SET LastName='malhotra' WHERE id=4";

if (mysqli_query($conn,$sql)) {
        echo "updated successfully";
    }
    else{
       echo "Error creating table: " . mysqli_error($conn);
    }
?>
