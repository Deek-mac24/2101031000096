<?php
$username1=$_POST['username'];
$password1=$_POST['password'];
$username = "root";
$servername = "localhost";
$password="";
$dbname="mydb";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("connection Fail".mysqli_connect_error());
}



$sql3="INSERT INTO MyTable(UserName , Password) VALUES('$username1','$password1')";
if(mysqli_query($conn,$sql3)){
            echo "Inserted Successfully";
        }else
        {
            echo"error".mysqli_error($conn);
        }
    


//  nsert Query
// $sql2="INSERT INTO MyTable(UserName ,Password) VALUES('Mac_Deek','2424')";
// if(mysqli_query($conn,$sql2)){
//         echo "Created Successfully";
//     }else
//     {
//         echo"error".mysqli_error($conn);
//     }

    
// Table Created...
// $sql1="CREATE TABLE MyTable(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,UserName VARCHAR(10),Password VARCHAR(8))";
// if(mysqli_query($conn,$sql1)){
//     echo "Created Successfully";
// }else
// {
//     echo"error".mysqli_error($conn);
// }

// Create DataBase...

// $sql="Create database myDb";
// if(mysqli_query($conn,$sql)){
//     echo"DataBase Created";
// }
// else{
//     echo"Error";
// }
?>