<?php include "control/results.php"; ?>

<!DOCTYPE html>
<html>
<body>

<h1>Registration Form</h1>
<hr>

<form action="" method="post">
<table>
  <tr>
    <td><label for="fname">Full Name:</label></td>
    <td><input type="text" id="fname" name="fname"><?php echo "&nbsp".$validatename; ?></td>
  </tr>
  <tr>
    <td><label for="email">E-mail:</label></td>
    <td><input type="text" id="email" name="email"><?php echo "&nbsp".$validateemail; ?></td>
  </tr>
  <tr>
    <td><label for="pwd">Password:</label></td>
    <td><input type="password" id="pwd" name="pwd" minlength="8"><?php echo "&nbsp".$validatepassword; ?></td>
  </tr>
  <tr>
    <td><label for="com">Comment:</label></td>
    <td><textarea name="com" id="com" rows="5" cols="40"></textarea><?php echo "&nbsp".$validatecomment; ?></td>
  </tr>
  <tr>
    <td><label for="gender">Gender:</label></td>
    <td>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label>
        <input type="radio" id="male" name="gender" value="Male">
        <label for="female">Male</label>
        <input type="radio" id="other" name="gender" value="Other">
        <label for="other">Other</label><?php echo "&nbsp&nbsp&nbsp".$validateradio; ?>
    </td>
  </tr>
  <tr>
    <td><label for="hobby">Please choose a hobby</label></td>
    <td>
        <input type="checkbox" name="hobby1" value="Singing">
        <label for="hobby1">Singing</label>
        <input type="checkbox" name="hobby2" value="Dancing">
        <label for="hobby2"> Dancing</label>
        <input type="checkbox" name="hobby3" value="Reading">
        <label for="hobby3">Reading</label>
        <?php echo "&nbsp&nbsp&nbsp".$validatecheckbox; ?>

        <?php echo "&nbsp&nbsp".$v1;?>
        <?php echo "&nbsp&nbsp".$v2;?>
        <?php echo "&nbsp&nbsp".$v3;?>
    </td>
  </tr>
  <tr>
    <td><label for="myfile">Please choose a file</label></td>
    <td><input type="file" id="myfile" name="myfile"></td>
  </tr>
</table>
  <input type="submit" value="Submit">
  <input type="reset" value="Reset">

</form>

</body>
</html>
