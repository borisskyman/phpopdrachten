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
<input type="radio" id="steen" name="steen" value="steen">
<img src="images/Rock.jpg" id="Rock">
<input type="radio" id="papier" name="papier" value="papier">
<img src="images/Paper.png" id="Paper">
<input type="radio" id="schaar" name="schaar" value="schaar">
<img src="images/Scissors.png" id="Scissors">
<br>
<a href="../index.php">Terug</a>
<?php include '../Includes/footer.php'; ?>
</body>
</html>
