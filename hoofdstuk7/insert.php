<?php
/**
 * User: Boris Vasic
 * Date: 31-5-2020
 * Time: 17:31
 * File: opdracht7.4.php
 */
$opdracht = "Opdracht 7.4";

// Includeert de volgende pagina's die mogelijk maakt
// van het invoegen van een nieuwe grap.
include '../Includes/header.php';
include 'functions.php';


// Als er op verzenden geklikt wordt, voert het de volgende stuk code uit

if (isset($_POST['JokeTextMaker']))
{
    // Variabele wordt van textbox JokeTextMaker uit de POST opgeslagen
    $JokeTexMaker = $_POST['JokeTextMaker'];

    // Als de waarde van textbox JokeTexMaker leeg is,
    // Geeft het deze echo terug.
    if ($JokeTexMaker == "")
    {
       echo  "U moet eerst een waarde voor Joketext invoeren";
    }
    // Anders als de waarde van de textbox niet leeg is, voert hij dit stuk code uit
    else if (isset($_POST['JokeClouMaker']))
    {

        // Slaat de huidige datum van vandaag op.
        $CurrentDate = date("Y-m-d");

        // Variabele wordt van textbox JokeClouMaker uit de POST opgeslagen
        $JokeClouMaker = $_POST['JokeClouMaker'];

        // Als de waarde van textbox JokeClouMaker leeg is,
        // Geeft het deze echo terug.
        if ($JokeClouMaker == "")
        {
           echo "U moet eerst een waarde voor Jokeclou invoeren";
        }
        // Anders maakt hij een connectie met de sql server die in functions.php
        // is opgeslagen
        else
        {
            startConnection();
            // De variabeles worden nu gebruikt voor het invoegen van een nieuw grap met datum in
            // het SQL tabel.
            $query = "INSERT INTO joke VALUES ('$JokeTexMaker', '$JokeClouMaker', '$CurrentDate')";

            //De ingevoerde grap is dankzij executeQueryViaExec($query) nu volledig in SQL opgeslagen
            // en kan teruggezien worden in Opdracht 7.3
            executeQueryViaExec($query);

            // geeft aan hoe de insert into waarde eruit ziet in HTML/CSS/PHP
            echo $query;

            echo "<h1>Grap toegevoegd!</h1>";
            echo "<p>Bedankt voor het toevoegen van je grap. Hieronder zie je een overzicht van je grap:</p>";
            echo "<label>joketext: ".$JokeTexMaker."</label><br>";
            echo "<label>jokeclou: ".$JokeClouMaker."</label><br><br><br>";
            echo "<a href='Opdracht7.3.php'>Bekijk grappen (opdracht 7.3) </a>";
        }
    }
}
// Als u alleen deze pagina bezoekt zonder dat je hier gekomen bent via een POST formulier, dan
// laat hij dit zien op het Pagina.
else
{
    echo "Helaas werkt deze site niet totdat je ergens een POST hebt gedaan.";
}
?>
<body>
<br>
<br>
<a href="../index.php">Terug</a>
<?php include '../Includes/footer.php'; ?>
</body>
</html>
