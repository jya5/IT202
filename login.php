<html>


<head>

<title> Log In </title>

</head>
<style>
body {
    background-color: #d0e4fe;
}

h1 {
    color: purple;
}

h3 {
    color: red;
}
</style>

<body>

<script>
//this java script was added
function validateForm() {
    var x = document.forms["theForm"]["username"].value;
    var y = document.forms["theForm"]["passwd"].value;
    if (x == null || x == "") {
        alert("Username must be filled out");
        return false;
	}
    if (y == null || y == "") {
        alert("Password must be filled out");
        return false;

  }	
}

</script>


<?php 
if (isset($_POST['submit'])){
include ("account.php");

$uname = $_POST["username"];
$pass = $_POST["passwd"];
$sql = "SELECT * FROM users where user = '$uname'";
$salt = substr (hash("sha256" , $pass), 0, 20);

if ($result->num_rows > 0) {
//output data of each row

while($row = $result->fetch_assoc()) {

if ($salt==$row["pass"]){

	echo "first name:" . $row["fname"] . " - last name: " .$row["lname"] . "<br>";
}else { echo "Invalid Username or Password";

}
	}
}
	else{
		echo "No results shown, please register new account.";
}
$conn->close();
}
?>

<h1><center>Welcome!</center></h1>
<h3><center>Please Sign In</center></h3>

<form name = "theForm" form action = "display.php" onsubmit="return validateForm()" method="post">
<center>Username: <input type="text" name="username"></center>

<br>

<center>Password: <input type="password" name="passwd"></center>

<br>
<br>

<center><input type="submit" name='submit' value="Go"></center>

<br>
<br>

<center><a href="register.php"> Create a New Account </a></center>



</form>
</body>
</html>


