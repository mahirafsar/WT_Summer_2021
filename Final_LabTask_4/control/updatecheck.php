<?php
include('../model/db.php');


 $error="";
 $radio1=$radio2=$radio3="";
$firstname=$email=$address="";

if (isset($_POST['update'])) {
if (empty($_POST['firstname']) || empty($_POST['email'])) {
$error = "input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->UpdateUser($conobj,"student",$_POST["username"],$_POST['firstname'],$_POST['email'],$_POST['gender'],$_POST['address']);
if($userQuery==TRUE)
{
    echo "update successful"; 
}
else
{
    echo "could not update";    
}
$connection->CloseCon($conobj);

}
}

if(isset($_POST['search'])){
    if (empty($_POST['search_username'])) {
        $errorinfo = "Please provide a username";
    }else{
        
        $connection = new db();
        $conobj=$connection->OpenCon();

        $userQuery1=$connection->SearchUser($conobj,"student",$_POST["search_username"]);

        if ($userQuery1->num_rows!=null) {
            if ($userQuery1->num_rows > 0) {
                while($row = $userQuery1->fetch_assoc()) {
                $username = $row["username"];
                $firstname=$row["firstname"];
                $email=$row["email"];
                if(  $row["gender"]=="female" )
                { $radio1="checked"; }
                else if($row["gender"]=="male")
                { $radio2="checked"; }
                else{$radio3="checked";} 
                $address=$row["address"]; 
                } 
            }
        }else{
            $errorinfo= "No result found";
        }
    
    }
}

?>
