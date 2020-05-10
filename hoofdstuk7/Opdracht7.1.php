<?php
/**
 * User: Boris Vasic
 * Date: 10-5-2020
 * Time: 23:41
 * File: opdracht7.1.php
 */
$opdracht = "Opdracht 7.1";
include '../Includes/header.php'; ?>
<body>
<?php
// Open de database connectie en ODBC driver
try
{
    $pdo = new PDO("odbc:odbc2sqlserver");
}
catch (PDOException $e)
{
    echo "<h1>Database error:</h1>";
    echo $e->getMessage();
    die();
}

echo "database connectie gelukt";
?>
<?php

// Uitvoeren van een SQl query
try
{
    // Query schrijven
    $sql = 'SELECT * FROM joke';

    // Query uitvoeren
    $result = $pdo->query($sql);
}
catch (PDOException $e)
{
    echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
    exit();
}
   // Lege Array aanmaken voor de results
   $aJokes = array();

   // Door de results heen loopen via een while
   while ($row = $result->fetch(PDO::FETCH_ASSOC))
   {
    // Result wegschrijven in de $aJokes array
    $aJokes[] = $row;
   }
   // Tonen van de inhoud van aJokes
   var_dump($aJokes);
?>

<br>
<a href="../index.php">Terug</a>
<?php include '../Includes/footer.php'; ?>
</body>
</html>
