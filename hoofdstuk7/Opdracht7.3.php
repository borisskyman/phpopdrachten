<?php
/**
 * User: Boris Vasic
 * Date: 21-5-2020
 * Time: 23:41
 * File: opdracht7.3.php
 */

$opdracht = "Opdracht 7.3";
include '../Includes/header.php';

// Inladen functies bestand
include("functions.php");

// Lege Array aanmaken voor de results
$aJokes = array();

// Starten van een database connectie
startConnection();

// Executeren van een SQL query
if (isset($_GET['jokesearch']))
{
    $SearchedJoke = $_GET['jokesearch'];
    $query = 'SELECT * FROM joke WHERE joketext LIKE %'.$SearchedJoke.'%';
}
else
{
    $query = "SELECT * FROM joke";
}
$jokes = executeQuery($query);

echo "<p> $query </p>";
?>
<form method="get">
    <label>
        Zoekterm:
    </label>
    <input type="text" id="jokesearch" name="jokesearch">
    <input type="submit" value="Zoeken">
</form>
<hr>
<?php
// Resultaten rij voor rij ophalen
while($row = $jokes->fetch(PDO::FETCH_ASSOC) )
{
    $aJokes[] = $row;
}

?>
<?php

echo "<table class='JokeSearchCSS'>";
echo "<tr><th class='JokeSearchCSS'>Jokeid</th><th class='JokeSearchCSS'>Joketext</th><th class='JokeSearchCSS'>Jokeclou</th><th class='JokeSearchCSS'>Jokedate</th></tr>";
foreach($aJokes as $grap)
{
    echo "<tr><td class='jokeData'>".$grap['id']."</td><td class='jokeData'>".$grap['joketext']."</td><td class='jokeData'>".$grap['jokeclou']."</td><td class='jokeData'>".$grap['jokedate']."</td></tr>";
}
echo "</table>";
?>
<br>
<a href="../index.php">Terug</a>
<?php include '../Includes/footer.php'; ?>
