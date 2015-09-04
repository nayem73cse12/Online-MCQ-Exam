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


$sql = "SELECT id, ques, opt1, opt2, opt3, opt4 FROM questions";




$result = $conn->query($sql);
/*
$sql = "SELECT id, firstname, lastname FROM MyGuests"; */
if ($result->num_rows > 0) {
 //   echo "<table><tr><th>ID</th><th>Questions</th><th>1st Option</th><th>2nd Option</th><th>3rd 		//	Option</th><th>4rth Option</th></tr>";
    // output data of each row
    $i=1;
    while($row = $result->fetch_assoc()) {
    	$q="q".$i;
    	echo $q;
        echo '<h4 class="text-primary">'.$row["id"].". ".$row["ques"].'</h4>'. '<div class="radio"><input type="radio" value="A" name='$q'>' .$row["opt1"]. "<br>".'<input type="radio" value="B" name=isset($q)>' .$row["opt2"]."<br>".'<input type="radio" value="C" name='$q'>'.$row["opt3"]."<br>".'<input type="radio" value="D" name='$q'>'.$row["opt4"]. "</div><br>";
        $i++;
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