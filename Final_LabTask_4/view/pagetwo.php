<?php
session_start(); 

include('../control/updatecheck.php');


if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>
<body>
<h2>Profile Page</h2>

Hii, <h3><?php echo $_SESSION["username"];?></h3>

<?php
$radio1=$radio2=$radio3="";
$firstname=$email=$address="";
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"student",$_SESSION["username"],$_SESSION["password"]);
$userQuery1=$connection->searchUser($conobj,"student",$_SESSION["username"]);
if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $firstname=$row["firstname"];
      $email=$row["email"];
     
      if($row["gender"]=="female" )
      { $radio1="checked"; }
      else if($row["gender"]=="male")
      { $radio2="checked"; }
      else{$radio3="checked";}
      
      $address=$row["address"];
  } 
}
  else {
    echo "0 results";
  }

  if ($userQuery1->num_rows > 0) {
    // output data of each row
    while($row = $userQuery1->fetch_assoc()) {
      $firstname=$row["firstname"];
      $email=$row["email"];
     
      if($row["gender"]=="female" )
      { $radio1="checked"; }
      else if($row["gender"]=="male")
      { $radio2="checked"; }
      else{$radio3="checked";}
      
      $address=$row["address"];
    }
    } 
    else {
    echo "0 results";
    }

?>
<form action='' method='post'>

Search by username : <input type='text' name='username' value="" >
<input name='search' type='submit' value='search'><br>

<br>Your Profile Page.
<br><br>
firstname : <input type='text' name='firstname' value="<?php echo $firstname; ?>" ><br><br>

email : <input type='text' name='email' value="<?php echo $email; ?>" ><br><br>
 Gender:
     <input type='radio' name='gender' value='female'<?php echo $radio1; ?>>Female
     <input type='radio' name='gender' value='male' <?php echo $radio2; ?> >Male
     <input type='radio' name='gender' value='other'<?php  echo $radio3; ?> > Other
     <br><br>
Address: <input type='text' name='address' value="<?php echo $address; ?>" ><br><br>

     <input name='update' type='submit' value='Update'>  

     <?php echo $error; ?>
<br>
<br>
<a href="../view/pageone.php">Back </a>
<br>

<a href="../control/logout.php"> logout</a><br>


</body>
</html>


