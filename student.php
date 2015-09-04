<!DOCTYPE html>
<html>
<head>
	<title>Online Exam || Test Yourself </title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlinemcq";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT id, ques, opt1, opt2, opt3, opt4 FROM questions4";




$result = $conn->query($sql);
/*
$sql = "SELECT id, firstname, lastname FROM MyGuests"; */
if ($result->num_rows > 0) {
 //   echo "<table><tr><th>ID</th><th>Questions</th><th>1st Option</th><th>2nd Option</th><th>3rd 		//	Option</th><th>4rth Option</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<h4 class="text-primary">'.$row["id"].". ".$row["ques"].'</h4>'. '<div class="radio"><input type="radio" value="A" name="q.$row["id"].a">' .$row["opt1"]. "<br>".'<input type="radio" value="B" name="q1a">' .$row["opt2"]."<br>".'<input type="radio" value="C" name="q1a">'.$row["opt3"]."<br>".'<input type="radio" value="D" name="q1a">'.$row["opt4"]. "</div><br>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

</div>
</body>
</html>