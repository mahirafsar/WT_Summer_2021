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

 function AddUser($conn,$table,$pname,$pdesc,$pcate,$pprice,$pimage)   
 {
 $result = $conn->query("INSERT INTO $table VALUES('','$pname','$pdesc','$pcate',$pprice,'$pimage')");
 return $result;
 }

 function ShowAllProduct($conn,$table)
 {
 $result = $conn->query("SELECT * FROM  $table");
 return $result;
 }

 function SearchProduct($conn,$table,$id)
 {
    $result = $conn->query("SELECT * FROM ". $table." WHERE P_id='". $id."'");
    return $result;
 }


function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>
