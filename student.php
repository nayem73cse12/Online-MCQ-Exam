<!DOCTYPE html>
<html>
<head>
	<title>Online Exam || Test Yourself </title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
<h2>Select Correct Answer from the Given Options</h2>
<br><br>
<form class="form-horizontal" method='post' action='input.php'>
    <div class="form-group has-success">
      <div class="col-xs-4">
        <input type="text" class="form-control" id="name" name="user_name" placeholder="Enter Your Name">
      </div>
    </div>
    <br><br>

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
        echo "<div class='form-group'><div class='col-lg-10'><h4 class='text-primary'>".$row['id'].". ".$row['ques']."</h4>";
      
		echo  "<div class='radio'>";
			    echo "<input type='radio' value='A' name='q".$row['id']."a' required>".$row['opt1'].".<br>";
			    echo "<input type='radio' value='B' name='q".$row['id']."a' required>".$row['opt2'].".<br>";
			    echo "<input type='radio' value='C' name='q".$row['id']."a' required>".$row['opt3'].".<br>";
			    echo "<input type='radio' value='D' name='q".$row['id']."a' required>".$row['opt4'].".<br>";
		echo  "</div></div></div>";
		
    } 
} else {
    echo "0 results";
}


$conn->close();

?>
<input class='btn btn-primary' type='submit' value='submit'>
</form>

</div>
<footer>
        <div align="center">
       <div  >
                <p></p>       
                <small class="copyright">Developed By <strong>Masiur Rahman Siddiki & Abu Hanife Nayem</strong></br> Department of <b style="color:black">C</b>omputer <b style="color:black">S</b>cience and <b style="color:black">E</b>ngineering, <b style="color:black">S</b>hahjalal <b style="color:black">U</b>niversity of <b style="color:black">S</b>cience and <b style="color:black">T</b>echnology, Sylhet</small>

      </div>
    </div>
</footer>
</body>
</html>