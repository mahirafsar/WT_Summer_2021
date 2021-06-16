<?php include "control/myprocess.php"; ?>

<!DOCTYPE html>
<html>
<body>

<h1>Registration Form</h1>
<hr>

<form action="" method="post">
<table>
  <tr>
    <td><label for="firstname">Full Name:</label></td>
    <td><input type="text" id="firstname" name="firstname">
  </tr>
  <tr>
    <td><label for="email">E-mail:</label></td>
    <td><input type="text" id="email" name="email"></td>
  </tr>
  <tr>
    <td><label for="pwd">Password:</label></td>
    <td><input type="password" id="pwd" name="pwd" minlength="8"></td>
  </tr>
  <tr>
    <td><label for="com">Comment:</label></td>
    <td><textarea name="com" id="com" rows="5" cols="40"></textarea></td>
  </tr>
  <tr>
    <td><label for="gender">Gender:</label></td>
    <td>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label>
        <input type="radio" id="male" name="gender" value="Male">
        <label for="female">Male</label>
        <input type="radio" id="other" name="gender" value="Other">
        <label for="other">Other</label>
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