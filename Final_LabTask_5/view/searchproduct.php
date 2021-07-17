<?php
session_start(); 

include('../control/searchproductcheck.php');


if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}
</style>
</head>
<body>

<h2>Search Product</h2>

<form action='' method='post'>
Search by ID : <input type='text' name='search_product'>
<input name='search' type='submit' value='SEARCH PRODUCT'>  
</form><br>

<table style="width:50%">
  <tr>
    <th>Product ID</th>
    <th>Product Name</th>
    <th>Description</th> 
    <th>Category</th>
    <th>Price</th>
    <th>Image</th>
  </tr>
  <tr>
    <td><?php echo $pid; ?></td>
    <td><?php echo $pname; ?></td>
    <td><?php echo $pdesc; ?></td>
    <td><?php echo $pcate; ?></td>
    <td><?php echo $pprice; ?></td>
    <td><img src="<?php echo $pimage; ?>" width="100px" alt=""></td>  
  </tr>
  <!-- <?php
	    while($row = $userQuery->fetch_assoc()){
	?>
	<tr>
					
		<td><?php echo $row['P_id']; ?></td>
		<td><?php echo $row['P_Name']; ?></td>
		<td><?php echo $row['P_Desc']; ?></td>
		<td><?php echo $row['P_Category']; ?></td>
		<td><?php echo $row['P_Price']; ?></td>
        <td><<?php echo $row['P_Picture']; ?></td>
	</tr>
	<?php } ?> -->
</table>

<br>
<br>
<a href="../view/pageone.php"> Back </a>
<br>

<a href="../control/logout.php"> logout</a>

</body>
</html>