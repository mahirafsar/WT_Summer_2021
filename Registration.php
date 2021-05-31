<!DOCTYPE html>
<html>
<body>

<h1>Registration Form</h1>
<hr>

<form>
<table>
  <tr>
    <td><label for="fname">Full Name:</label></td>
    <td><input type="text" id="fname" name="fname"></td>
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
    <td><label for="comment">Comment:</label></td>
    <td><textarea rows="5" cols="40" name="comment" form="usrform"></textarea></td>
  </tr>
  <tr>
    <td><label for="gender">Gender:</label></td>
    <td>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
        <input type="radio" id="male" name="gender" value="male">
        <label for="female">Male</label>
        <input type="radio" id="other" name="gender" value="other">
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
