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


    $sql4 = "SELECT  user_ans,correct_opt FROM userans";
    $result4 = $conn->query($sql);

    if ($result4->num_rows > 0) {
    $i=0;
    while($row = $result4->fetch_assoc()) {
        
       
    	if($row['user_ans']==$row['correct_opt'])
            $i++;
		
    } 
    echo "<br>Mr $name, you have got $i."
    } else {
    echo "0 results";
    }

    <form class="form-horizontal" method='post' action='input.php'>
    <input class='btn btn-primary' type='submit' value='submit'>
</form>

 ?>

