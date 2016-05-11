<html> <body>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<style>
body {
    background-color: #d0e4fe;
}

h1 {
    color: black;
}

h3 {
    color: purple;
}
</style>
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
$email = $_POST["email"];
$bday = $_POST["bday"];
$class = $_POST["class"];
$year = $_POST["year"];

if ($fname=="" || $lname=="" || $user=="" || $pass=="" || $email=="" || $bday=="" || $class=="" || $year=="")
{

echo "Required Field";

} else { $sql = "insert into users values('$fname', '$lname', '$user', '$salt', '$email', '$bday', '$class', '$year', 0)";		
		if($conn->query($sql)==TRUE){


		echo "<h1><center>New Account Registered Successfully<center></h1>";

}else{ echo "Account Not Created" . $conn->error;}

}

?>

<center><a href='login.php'> <h3>Back to Login Page </h3></a></center>

</body> </html>
