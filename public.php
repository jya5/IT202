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

$pname = $_POST["pname"];

$sql = "SELECT * FROM users WHERE user = '$pname' or fname = '$pname'";
$result = $conn->query($sql);

if ($result->num_rows > 0){
while ($row=$result->fetch_assoc()){
echo "<table><tr><th>Full Name:</th><td>". $row["fname"] . " ". $row["lname"] . "<tr><th> Class Standing:</th><td>" . $row["class_standing"] . "</tr></td></table>"; 
}
}else{

//var_dump($sql);
echo "Error:" . $sql->error;
}

?> 

</body>
</html>
