<?php
/**
 * User: Boris Vasic
 * Date: 5-5-2020
 * Time: 23:38
 * File: opdracht6.2.php
 */
$opdracht = "Opdracht 6.2";
include '../Includes/header.php'; ?>
<body>
<h1>
    Spel steen papier schaar
</h1>
<p>
    Speel het spel steen - papier - schaar tegen de computer
</p>
<form action="checkGame.php" method="post">
<input type="radio" id="steen" name="steen" value="steen" onchange="document.getElementById('gameFrm').submit();">
<img src="images/Rock.jpg" id="Rock">
<input type="radio" id="papier" name="papier" value="papier" onchange="document.getElementById('gameFrm').submit();">
<img src="images/Paper.png" id="Paper">
<input type="radio" id="schaar" name="schaar" value="schaar" onchange="document.getElementById('gameFrm').submit();">
<img src="images/Scissors.png" id="Scissors">
</form>
<br>
<br>
<?php include 'checkGame.php' ?>
<br>
<a href="../index.php">Terug</a>
<?php include '../Includes/footer.php'; ?>
</body>
</html>
