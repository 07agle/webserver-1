<!doctype html>
<html>
<head lang="sv"></head>
<body>
   <?php
      include "inc/header.php";
   ?>
<h1>Quiz-Allmänbildning</h1>
<form action="evaluate.php" method="post">
   <fieldset>
       <legend>Frågor</legend>
       <label>Vad heter du? </label>
       <input type="text" name="q0">
       <br>
       <label>4 + 5 = </label>
       <input type="text" name="q1">
       <br>
       <label>3 x 5 = </label>
       <input type="text" name="q2">
       <br>
       <label>När slutade andra världskriget?</label>
       <input type="text" name="q3">
       <br>
       <label>Vad kallas klocktornet i London?</label>
       <input type="text" name="q4">
       <br>
       <input type="submit" value="Rätta">
   </fieldset>
</form>
<h2>Moment1: </h2>
<ul>
<li><a href="./Moment1/Uppgift1/uppgift1.php">Uppgift 1</a></li>
<li><a href="./Moment1/Uppgift2/uppgift2.php">Uppgift 2</a></li>
<li><a href="./Moment1/Uppgift3/uppgift3.php">Uppgift 3</a></li>
<li><a href="./Moment1/Uppgift4/uppgift4.php">Uppgift 4</a></li>
<li><a href="./Moment1/Uppgift5_6/uppgift5_6.php">Uppgift 5 & 6</a></li>
</ul>
</body>
</html>

