<?php
/**
 * User: Boris Vasic
 * Date: 13-5-2020
 * Time: 12:23
 * File: Instructie7.2.php
 */
$opdracht = "Instructie 7.2";
include '../Includes/header.php'; ?>
<body>
<?php

    try //de code in het try block is de enige code die wordt uitgevoerd
        // als deze code succesvol wordt uitgevoerd
    {
        $pdo = new PDO("odbc:odbc2sqlserver");
    }
         // de code in het catch blok wordt alleen uitgevoerd als er een fout
         // optreedt in de code in het try block
    catch (PDOException $e)
    {
        echo "<h1>Database Error:</h1>";
        echo $e->getMessage();
        die();
    }
        //Het resultaat van bovenstaande code is dat ik een variabele $pdo heb
        // van het type object, waarmee ik een query kan uitvoeren op de database

        // $sql is de sql statement die ik wil uitvoeren op de database,
        // en aangezien $pdo de connectie-handler is (het object dat de connectie vasthoudt)
        // moet ik de query wel op die manier uitvoeren

    $sql = 'SELECT * FROM joke';
    $result = $pdo->query($sql);

        // Maar hoe krijg ik nu alle grappen binnen????
        // Ik zie links van het = teken de variabele $result, zou hierin dan alle
        // grappen zitten?
        while ($row = $result->fetch(PDO::FETCH_ASSOC))
        {
            // omdat row een associatieve array is kan ik de waardes als associaties
            // uit de rij halen, dus:

            echo "<br>".$row['joketext'] . $row['jokeclou'];
        }


?>

<br>
<a href="../index.php">Terug</a>
<?php include '../Includes/footer.php'; ?>
</body>
</html>
