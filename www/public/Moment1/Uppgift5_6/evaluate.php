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
        $ans5 = $_POST['q5'];
        $ans6 = $_POST['q6'];
     	$points = 0;
     	
        
     	if($ans1 == "George Washington")
           $points++;
     	if($ans2 == 1991)
           $points++;
      if($ans3 == 1945)
            $points++;
      if($ans4 == "Guillotinen")
           $points++;
      if($ans5 == "Karl XII")
           $points++;
      if($ans6 == "Forntida Egypten")
           $points++;

      if($points <= 2){
            $feedback = "Läs på mer och försök igen";
      } elseif($points <= 4){
            $feedback = "Godkänd";
      } else{
            $feedback = "Bra, du behärskar det mesta.";
      }
     	
     	echo("Bra jobbat {$name} du fick  {$points}  av 6 möjliga {$feedback}");
?>
</body>
</html>



