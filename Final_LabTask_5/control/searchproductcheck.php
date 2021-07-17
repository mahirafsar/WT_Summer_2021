<?php
include('../model/db.php');


$error="";


$pname=$pdesc=$pcate=$pprice=$pimage=$pid="";



if (isset($_POST['search'])) {
if (empty($_POST['search_product'])) {
$error = "input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->SearchProduct($conobj,"product",$_POST["search_product"]);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $pid=$row["P_id"];
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
    echo "search successful"; 
}
else
{
    echo "could not search";    
}
$connection->CloseCon($conobj);

}
}


?>