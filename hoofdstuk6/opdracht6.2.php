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
<form id="gameFrm" method="get" action="opdracht6.2.php">
<div class="float">
    <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="steen">
    <img src="images/steen.png" id="Rock">
    </div>
<div class="float">
    <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="papier">
    <img src="images/papier.png" id="Paper">
</div>
<div class="float">
    <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="schaar">
    <img src="images/schaar.png" id="Scissors">
</div>
<br>
<div>
<?php
    // Wat kiest de computer
    //Random wordt er een getal tussen de 0 en 2 gekozen
        $opties = array("steen","papier","schaar");
        $computerkeuzegetal = rand(0,2);
        $computerkeuze = $opties[$computerkeuzegetal];
        echo "&nbsp;&nbsp;De computer koos: <img src='images/{$computerkeuze}.png' id='KeuzePapierSteenOfSchaar'>";
?>
</div>
</form>
<br>
<br>
<a href="../index.php">Terug</a>
<?php include '../Includes/footer.php'; ?>
</body>
</html>
