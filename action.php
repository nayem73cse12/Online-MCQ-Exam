<?php
if (isset($_POST['submit'])) {
  $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];
  $q4 = $_POST['q4'];
  $q5 = $_POST['q5'];
  $q6 = $_POST['q6'];
  $q7 = $_POST['q7'];
  $q8 = $_POST['q8'];
  $q9 = $_POST['q9'];
  $q10 = $_POST['q10'];
  // options 
  $q1o2 = $_POST['q1o2'];
  $q2o2 = $_POST['q2o2'];
  $q3o2 = $_POST['q3o2'];
  $q4o2 = $_POST['q4o2'];
  $q5o2 = $_POST['q5o2'];
  $q6o2 = $_POST['q6o2'];
  $q7o2 = $_POST['q7o2'];
  $q8o2 = $_POST['q8o2'];
  $q9o2 = $_POST['q9o2'];
  $q10o2 = $_POST['q10o2'];

  $q1o1 = $_POST['q1o1'];
  $q2o1 = $_POST['q2o1'];
  $q3o1 = $_POST['q3o1'];
  $q4o1 = $_POST['q4o1'];
  $q5o1 = $_POST['q5o1'];
  $q6o1 = $_POST['q6o1'];
  $q7o1 = $_POST['q7o1'];
  $q8o1 = $_POST['q8o1'];
  $q9o1 = $_POST['q9o1'];
  $q10o1 = $_POST['q10o1'];
                                                                                  // developed by Masiur Rahman Siddiki , mrsiddiki@gmail.com // sust cse 2012 batch 
  $q1o3 = $_POST['q1o3'];
  $q2o3 = $_POST['q2o3'];
  $q3o3 = $_POST['q3o3'];
  $q4o3 = $_POST['q4o3'];
  $q5o3 = $_POST['q5o3'];
  $q6o3 = $_POST['q6o3'];
  $q7o3 = $_POST['q7o3'];
  $q8o3 = $_POST['q8o3'];
  $q9o3 = $_POST['q9o3'];
  $q10o3 = $_POST['q10o3'];

  $q1o4 = $_POST['q1o4'];
  $q2o4 = $_POST['q2o4'];
  $q3o4 = $_POST['q3o4'];
  $q4o4 = $_POST['q4o4'];
  $q5o4 = $_POST['q5o4'];
  $q6o4 = $_POST['q6o4'];
  $q7o4 = $_POST['q7o4'];
  $q8o4 = $_POST['q8o4'];
  $q9o4 = $_POST['q9o4'];
  $q10o4 = $_POST['q10o4'];
  // correct_options 
  $q1c = $_POST['q1c'];
  $q2c = $_POST['q2c'];
  $q3c = $_POST['q3c'];
  $q4c = $_POST['q4c'];
  $q5c = $_POST['q5c'];
  $q6c = $_POST['q6c'];
  $q7c = $_POST['q7c'];
  $q8c = $_POST['q8c'];
  $q9c = $_POST['q9c'];
  $q10c = $_POST['q10c'];
}
/* Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
*/

// Database connection 

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


// sql to create table

$sql1 = "CREATE TABLE questions (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
ques VARCHAR(255) NOT NULL,
opt1 VARCHAR(200),
opt2 VARCHAR(200),
opt3 VARCHAR(200),
opt4 VARCHAR(200),
correct_opt VARCHAR(30),
reg_date TIMESTAMP
)";
// sql to insert data into database table 
$sql2 = "INSERT INTO questions (ques, opt1, opt2, opt3, opt4, correct_opt)
VALUES ('$q1', '$q1o1', '$q1o2', '$q1o3', '$q1o4', '$q1c' ),
       ('$q2', '$q2o1', '$q2o2', '$q2o3', '$q2o4', '$q2c' ),
       ('$q3', '$q3o1', '$q3o2', '$q3o3', '$q3o4', '$q3c' )
       ('$q4', '$q4o1', '$q4o2', '$q4o3', '$q4o4', '$q4c' )
       ('$q5', '$q5o1', '$q5o2', '$q5o3', '$q5o4', '$q5c' )
       ('$q6', '$q6o1', '$q6o2', '$q6o3', '$q6o4', '$q6c' )
       ('$q7', '$q7o1', '$q7o2', '$q7o3', '$q7o4', '$q7c' )
       ('$q8', '$q8o1', '$q8o2', '$q8o3', '$q8o4', '$q8c' )
       ('$q9', '$q9o1', '$q9o2', '$q9o3', '$q9o4', '$q9c' )
       ('$q10', '$q10o1', '$q10o2', '$q10o3', '$q10o4', '$q10c' )";

if ($conn->query($sql2) === TRUE) {
  echo "Record Created Successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if ( $conn->query($sql1) === TRUE ) {
    
  } else {
    echo"database or table not found";
  }
  
$conn->close();
?>