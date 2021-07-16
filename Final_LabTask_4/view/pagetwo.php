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
<br>Your Profile Page.
<br><br>
<form action="" method="post">

Search by username : <br>
<input type='text' name='search_username' value="" >
<input name='search' type='submit' value='search'> 
</form>

Update Form: <br><br>
<form action='' method='post'>
<input type="hidden" name="username" value="<?php echo $username; ?>">
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

<a href="../control/logout.php"> logout</a>

</body>
</html>

