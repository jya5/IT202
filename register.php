<html>

<head>

<title> Register New Account </title>

</head>

<body>

<?php 

$servername = "localhost";
$username = "root";
$password = "12101992De@";
$dbname = "IT202";

//create connection 

$conn = new mysqli ($servername, $username, $password, $dbname);

//check connection

if ($conn->connect_error){
	die("Connection failed:" . $conn->connect_error);
}

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$user = $_POST["username"];
$pass = $_POST["passwd"];
$salt = hash("sha256" , $pass);

if ($fname=="" || $lname=="" || $user=="" || $pass=="")
{

echo "Required Field";

} else { $sql = "insert into users values('$fname', '$lname', '$user', '$salt')";
	
		$conn->query($sql); 
			
		echo "New Account Registered Successfully";

}


?>


<br>


<br>

<form action = "register.php" method="post">

First Name: <input type="text" name="fname">

<br>

Last Name: <input type="text" name="lname">

<br>

Username: <input type="text" name="username">

<br>

Password: <input type="password" name="passwd">

<br>

<input type="submit" value="Register">

</form>
</body>
</html>









</body>
</html>
