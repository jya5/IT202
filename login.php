<html>


<head>

<title> Log In </title>

</head>

<body>

<?php 
include ("account.php");

$uname = $_POST["username"];
$pass = $_POST["passwd"];
$sql = "SELECT * FROM users where user = '$uname'";
$result = $conn->query($sql);
//$salt =  ;

if ($result->num_rows > 0) {
//output data of each row

while($row = $result->fetch_assoc()) {
if ($pass==$row["pass"]){

	echo "first name:" . $row["fname"] . " - last name: " .$row["lname"] . "<br>";
}else { echo "Invalid Username or Password";

}
	}
}
	else{
		echo "No results shown, please register new account.";
}
$conn->close();

?>
<form action = " " method="post">
Username: <input type="text" name="username">

<br>

Password: <input type="password" name="passwd">

<br>
<br>

<input type="submit" value="Go">

<br>
<br>

<a href="register.php"> Create a New Account </a>



</form>
</body>
</html>


