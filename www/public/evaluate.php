<!doctype html>
<html>
<head lang="sv"></head>
<body>
<h1>Quiz Allmänbildning</h1>
<h2>Resultat</h2>
<?php
        $name = $_POST['q0'];
     	$ans1 = $_POST['q1'];
     	$ans2 = $_POST['q2'];
        $ans3 = $_POST['q3'];
        $ans4 = $_POST['q4'];
     	$points = 0;
     	
        
     	if($ans1 == 9)
           $points++;
     	if($ans2 == 15)
           $points++;
        if($ans3 == 1945)
           $points++;
        if($ans4 == "Big Ben")
           $points++;
     	
     	echo("<p> Bra jobbat ". $name.  " du fick " . $points . " av 4 möjliga</p>");
?>
</body>
</html>