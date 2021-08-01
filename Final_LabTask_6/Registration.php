<!DOCTYPE html>
<html>
<head>
<script src="js/validation.js"></script>
</head>
<body>

<h1>Registration Form</h1>
<hr>

<form action="" onsubmit="return validateForm()" method="post">
<table>
  <tr>
    <td><label for="fname">Full Name:</label></td>
    <td><input type="text" id="fname" name="fname"><p id="errorfname"></p></td>
  </tr>
  <tr>
    <td><label for="email">E-mail:</label></td>
    <td><input type="text" id="email" name="email"><p id="errormail"></p></td>
  </tr>
  <tr>
    <td><label for="pwd">Password:</label></td>
    <td><input type="password" id="pwd" name="pwd" minlength="8"><p id="errorpassword"></p></td>
  </tr>
  <tr>
    <td><label for="com">Comment:</label></td>
    <td><textarea name="com" id="com" rows="5" cols="40"></textarea><p id="errorcomment"></p></td>
  </tr>
  <tr>
    <td><label for="gender">Gender:</label></td>
    <td>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label>
        <input type="radio" id="male" name="gender" value="Male">
        <label for="male">Male</label>
        <input type="radio" id="other" name="gender" value="Other">
        <label for="other">Other</label><p id="errorgender"></p>
    </td>
  </tr>
  <tr>
    <td><label for="hobby">Choose a hobby</label></td>
    <td>
        <input type="checkbox" id="hobby1" name="hobby1" value="Singing">
        <label for="hobby1">Singing</label>
        <input type="checkbox" id="hobby2" name="hobby2" value="Dancing">
        <label for="hobby2"> Dancing</label>
        <input type="checkbox" id="hobby3" name="hobby3" value="Reading">
        <label for="hobby3">Reading</label><p id="errorhobby"></p>
    </td>
  </tr>
  <tr>
    <td><label for="myfile">Choose a file</label></td>
    <td><input type="file" id="myfile" name="myfile"><p id="errorfile"></p></td>
  </tr>
</table>
  <input type="submit" value="Submit">
  <input type="reset" value="Reset">

</form>

</body>
</html>