<?php
include('../model/db.php');


 $error="";


$pname=$pdesc=$pcate=$pprice=$pimage="";



if (isset($_POST['show'])) {
// if (empty($_POST['firstname']) || empty($_POST['email'])) {
// $error = "input given is invalid";
// }
// else
// {
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowAllProduct($conobj,"product");

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $pname=$row["P_Name"];
      $pdesc=$row["P_Desc"];
      $pcate=$row["P_Category"];
      $pprice=$row["P_Price"];
      $pimage=$row["P_Picture"];
  } 
}
  else {
    echo "0 results";
  }
if($userQuery==TRUE)
{
    echo "show successful"; 
}
else
{
    echo "could not show";    
}
$connection->CloseCon($conobj);

//}
}


?>