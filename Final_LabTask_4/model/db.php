<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "mydb";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function CheckUser($conn,$table,$username,$password)   //login
 {
 $result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
 return $result;
 }

 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }

 function UpdateUser($conn,$table,$username,$firstname,$email,$gender,$address)
 {
     $sql = "UPDATE $table SET firstname='$firstname', email='$email', gender='$gender', address='$address' WHERE username='$username'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }

 function searchUser($conn,$table,$username)
 {
    $sql = "SELECT * FROM ". $table." WHERE username='". $username."'";
    $result = $conn->query($sql);
    return $result;
    
    // if ($result->num_rows > 0) {
    // // output data of each row
    // while($row = $result->fetch_assoc()) {
    // echo "username: " . $row["username"]. " - email: " . $row["email"]."<br>";
    // $_POST["email"]=$row["email"];
    // }
    // } 
    // else {
    // echo "0 results";
    // }
 }

//  function Search($conn,$table,$username)
//  {
//     $result = $conn->query("SELECT * FROM ". $table." WHERE username='$' ");
//     return $result;
//  }

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>