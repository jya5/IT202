<html> <body> <form action="public.php" method="post"> 


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>


<div class="container">
<dl>
  <center><h2><dt>Hello There!</dt></h2></center>
  <center><h3 class="text-primary"> View the User Table Below</h3></center>
  <center><a class="bg-warning"> This is sensitive data.</a></center>
 <table class="table table-bordered">
<dl>

</div>


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

$uname = $_POST["username"];
$pass = $_POST["passwd"];

$salt = substr (hash("sha256" , $pass), 0, 20);


if ($uname=="admin" && $pass=="admin"){
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0){
echo "<table class= 'table table-striped'> <tr><th> First Name</th> <th>Last Name</th> <th> Username</th> <th>Email</th> <th>Birthday</th> <th>Class Standing</th> <th> Grad year</th> <th>Attend </th>" ;
while ($row=$result->fetch_assoc()){


echo "<tr> <td>" . $row["fname"] . "</td><td> " . $row["lname"] . "</td><td>" . $row["user"] . "</td><td>" . $row["email"] . "</td><td>" .$row["birth_date"] . "</td><td>" . $row["class_standing"] . "</td><td>" . $row["year"] . "</td><td>" . $row["attendance"] . "</td><td></tr>"; 
}


echo "</table>";
//changes made: added edit php option
echo '<center><a href="edit.php">Edit Tables</a></center>'; 
}

}else {

$sql = "select * from users where user = '$uname'" ;
$result = $conn->query($sql);
if ($result->num_rows > 0){
while ($row=$result->fetch_assoc()){

if($salt!=$row["pass"]){
	echo "<h1>Wrong Password! Try Again.</h1>";
}else{

echo "Name:" . $row["fname"] . " " . $row["lname"] . "<br> username:" . $row["user"] . "<br> email:" . $row["email"] . "<br> birthdate:" .$row["birth_date"] . "<br> class standing:" . $row["class_standing"] . "<br> graduation year:" . $row["year"] . "<br> attendace:" . $row["attendance"] . "<br><br><br>"; 

}



echo '<input type="text" name="pname"> <input type = "submit" value="search">';
}
}

else{

echo "account does not exist"."<br/>"."<a href='register.php'> Create a New Account </a>";
}

}
//s$conn->close();

?> 

</form> </body> </html>
