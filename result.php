<!DOCTYPE html>
<html>
<head>
    <title>Result || Online MCQ Exam </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
    function myFunction() {
        $("#div5").delay(8000).fadeIn();
      //  alert("");
    }
    </script>
</head>
<body onload="myFunction()">
<div class="container">
<?php 
    include('input.php');
    echo "<center>";
    echo "<h3 class='text-primary'>You have got <h2 class='text-primary'><b>$i</b></h2>.</h3>";

    // funny comments
    echo "<div id='div5'>";
    if ( $i <= 3) {
        echo "<h2 class='text-danger'>";
        echo "Sorry, $name. Better luck next time.";
        echo "</h2>";    }
    else if ( $i < 6 ) {
        echo "<h2 class='text-info'>";
        echo "You have potential, $name. Have it nurtured. ";
        echo "</h2>";
    }
    else if ( $i < 8 ) {
        echo "<h2 class='text-success'>";
        echo "That's Good, $name. Keep it up";
    }
    else 
        echo "Wow, $name, Extra-Ordinary !! How did you do that !!!...";
        echo "</h2>";
    echo "</div>";
   
   
    
   
 ?>
 </center>

 </div>
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 <footer>
        <div align="center">
       <div  >
                <p></p>       
                <small class="copyright">Developed By <strong ><a style="color:black"  href="http://masiur.me">Masiur Rahman Siddiki</a> & <a style="color:black"  href="http://facebook.com/abuhanif.nayem">Abu Hanife Nayem</a></strong></br> Department of <b style="color:black">C</b>omputer <b style="color:black">S</b>cience and <b style="color:black">E</b>ngineering, <b style="color:black">S</b>hahjalal <b style="color:black">U</b>niversity of <b style="color:black">S</b>cience and <b style="color:black">T</b>echnology, Sylhet</small>

      </div>
    </div>
</footer>
</body>
</html>


