<!DOCTYPE html>
<html>
<head>
	<title>Online Exam || Test Yourself </title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">

<form method='post' action='input.php'>


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


$sql1 = "SELECT id, ques, opt1, opt2, opt3, opt4 FROM questions4";

$result = $conn->query($sql1);
/*
$sql = "SELECT id, firstname, lastname FROM MyGuests"; */
if ($result->num_rows > 0) {
 //   echo "<table><tr><th>ID</th><th>Questions</th><th>1st Option</th><th>2nd Option</th><th>3rd 		//	Option</th><th>4rth Option</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<h4 class='text-primary'>".$row['id'].". ".$row['ques']."</h4>";
      
		echo  "<div class='radio'>";
			    echo "<input type='radio' value='A' name='q".$row['id']."a'>".$row['opt1'].".<br>";
			    echo "<input type='radio' value='B' name='q".$row['id']."a'>".$row['opt2'].".<br>";
			    echo "<input type='radio' value='C' name='q".$row['id']."a'>".$row['opt3'].".<br>";
			    echo "<input type='radio' value='D' name='q".$row['id']."a'>".$row['opt4'].".<br>";
		echo  "</div>";
		
    } 
} else {
    echo "0 results";
}


$conn->close();

?>
<input class='btn btn-primary' type='submit' value='submit'>
</form>

</div>
</body>
</html>