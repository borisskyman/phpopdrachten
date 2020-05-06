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
    <img src="images/steen.png" class='SteenPapierSchaar'>
    </div>
<div class="float">
    <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="papier">
    <img src="images/papier.png" class='SteenPapierSchaar'>
</div>
<div class="float">
    <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="schaar">
    <img src="images/schaar.png" class='SteenPapierSchaar'>
</div>
<br>
<div>
<p>
    Start het spel door schaar, papier of steen te kiezen. De computer kiest samen tegelijkertijd met jou.
</p>
<?php
    if (isset($_GET['keuze']))
    {
        echo "Jij koos: <img src='images/{$_GET['keuze']}.png' class='SteenPapierSchaar'>";
        // Wat kiest de computer
        //Random wordt er een getal tussen de 0 en 2 gekozen
        $opties = array("steen","papier","schaar");
        $computerkeuzegetal = rand(0,2);
        $computerkeuze = $opties[$computerkeuzegetal];
        echo "&nbsp;&nbsp;De computer koos: <img src='images/{$computerkeuze}.png' class='SteenPapierSchaar'> <br><br>";
        $spelerKeuze = $_GET['keuze'];
        if ($spelerKeuze == $computerkeuze)
        {
            echo "gelijke keuzes wint niemand";
        }
        else if ($spelerKeuze == "schaar" && $computerkeuze == "papier")
        {
            echo "schaar wint van papier";
        }
        else if ($spelerKeuze == "schaar" && $computerkeuze == "steen")
        {
            echo "schaar verliest van steen";
        }
        else if ($spelerKeuze == "steen" && $computerkeuze == "schaar")
        {
            echo "steen wint van schaar";
        }
        else if ($spelerKeuze == "steen" && $computerkeuze == "papier")
        {
            echo "steen verliest van papier";
        }
        else if ($spelerKeuze == "papier" && $computerkeuze == "steen")
        {
            echo "papier wint van steen";
        }
        else if ($spelerKeuze == "papier" && $computerkeuze == "schaar")
        {
            echo "papier verliest van schaar";
        }
    }
?>
</div>
</form>
<br>
<br>
<a href="../index.php">Terug</a>
<?php include '../Includes/footer.php'; ?>
</body>
</html>
