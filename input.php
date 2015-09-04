<?php 
	$name = $_POST['name'];
	// correct asnwers taken from users
	$q1c = $_POST['q1a'];
	$q2c = $_POST['q2a'];
	$q3c = $_POST['q3a'];
	$q4c = $_POST['q4a'];
	$q5c = $_POST['q5a'];
	$q6c = $_POST['q6a'];
	$q7c = $_POST['q7a'];
	$q8c = $_POST['q8a'];
	$q9c = $_POST['q9a'];
	$q10c = $_POST['q10a'];

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
	$sql1 = "CREATE TABLE userans (
				id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
				user_ans VARCHAR(4) NOT NULL,
				opt1 VARCHAR(200),
				correct_opt VARCHAR(30)
			)";