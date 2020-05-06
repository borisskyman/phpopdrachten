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
        $_SESSION['user1'] = 0;
        $_SESSION['user2'] = 0;
        if ($spelerKeuze == $computerkeuze)
        {
            echo "gelijke keuzes wint niemand <br><br>";
            echo "De score is ". $_SESSION['user1'] . " tegen " . $_SESSION['user2'];
        }
        else if ($spelerKeuze == "schaar" && $computerkeuze == "papier")
        {
            echo "schaar wint van papier <br><br>";
            $_SESSION['user1'] +=1;
            echo "De score is ". $_SESSION['user1'] . " tegen " . $_SESSION['user2'];
        }
        else if ($spelerKeuze == "schaar" && $computerkeuze == "steen")
        {
            echo "schaar verliest van steen <br><br>";
            $_SESSION['user2'] +=1;
            echo "De score is ". $_SESSION['user1'] . " tegen " . $_SESSION['user2'];
        }
        else if ($spelerKeuze == "steen" && $computerkeuze == "schaar")
        {
            echo "steen wint van schaar <br><br>";
            $_SESSION['user1'] +=1;
            echo "De score is ". $_SESSION['user1'] . " tegen " . $_SESSION['user2'];
        }
        else if ($spelerKeuze == "steen" && $computerkeuze == "papier")
        {
            echo "steen verliest van papier <br><br>";
            $_SESSION['user2'] +=1;
            echo "De score is ". $_SESSION['user1'] . " tegen " . $_SESSION['user2'];
        }
        else if ($spelerKeuze == "papier" && $computerkeuze == "steen")
        {
            echo "papier wint van steen <br><br>";
            $_SESSION['user1'] +=1;
            echo "De score is ". $_SESSION['user1'] . " tegen " . $_SESSION['user2'];
        }
        else if ($spelerKeuze == "papier" && $computerkeuze == "schaar")
        {
            echo "papier verliest van schaar <br><br>";
            $_SESSION['user2'] +=1;
            echo "De score is ". $_SESSION['user1'] . " tegen " . $_SESSION['user2'];
        }
        if ($_SESSION['user1'] == 5)
        {
            $Winnaar = "De Computer wint! <br> Het spel start weer opnieuw als je een nieuwe keuze maakt";
            return $Winnaar;
            session_destroy();
        }
        else if ($_SESSION['user2'] == 5)
        {
            $Winnaar = "Jij wint! <br> Het spel start weer opnieuw als je een nieuwe keuze maakt";
            return $Winnaar;
            session_destroy();
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
