<html>
<style>
body {
    background-color: #d0e4fe;
</style>

<head>
	<title> Update a record in Table</title>
	</head>
	
	<body>
	<form action="" method="post">
	<table><tr><th>First Name: <input type="text" name="fname"/></tr></th>
	<tr><th>Last Name: <input type="text" name="lname"/></tr></th>	
	<tr><th>Birth Date: <input type="text" name="birth_date"/></tr></th>	
	<tr><th>Class Standing: <input type="text" name="class_standing"/><br/></tr></th>
	<tr><th>Year: <input type="number" name="year"/></tr></th>
	
	<tr><th><input type="submit" name="submit" value="Submit"/></tr></th>
	</table>
	</form>
	</body>

<?php
include ("account.php");
if (isset($_POST['submit'])){
	var_dump($_POST);
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$user = $_POST["username"];
	$email = $_POST["email"];
	$bday = $_POST["bday"];
	$class = $_POST["class"];
	$year = $_POST["year"];


	$sql= "UPDATE users SET user='$user', email='$email', birth_date='$bday', class_standing='$class', year='$year' where fname='$fname' and lname='$lname';";
	if($conn->query($sql)==TRUE){


			 "Record/s were updated successfully.";
	}
		else {
		"ERROR:  Could not update record/s $sql." . mysqli_error ;
	}
}
?>
</head>
</html>
