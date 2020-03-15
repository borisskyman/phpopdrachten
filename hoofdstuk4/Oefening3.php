<?php
/**
 * User: Boris Vasic
 * Date: 19-2-2020
 * Time: 12:02
 * File: Oefening3.php
 */
$opdracht = "Oefening 3";
include '../Includes/header.php'; ?>
<body>

<?php

//de date() functie kun je een tweede parameter doorgevenwaarmee je aangeeft welke
// //dag je wil hebben. Als je geen tweede parameter doorgeeft dan is het de datum van
////vandaag zoals je al eerder hebt gezien.

/// //Welke datum krijg ik als ik 0 doorgeef als waarde?

$datum = date('d-m-Y', 0);

//Welke datum krijgen we hier te zien? Antwoord: 01-01-1970

echo $datum;
?>
<br>
<?php
        $datum = date('d-m-Y', 60*60*24);
        //Welke datum krijgen we hier te zien? Antwoord: 02-1-1970
        echo $datum;
?>
<br>
<?php
        $datumAlsGetal =strtotime('now');
        echo $datumAlsGetal;
        // En vervolgens kunnen we dat getal ook doorgeven aan de date() functie
        $vandaag = date('d-m-Y', $datumAlsGetal);
        echo "<br>".$vandaag;
?>
<br>
<?php
        $datumAlsGetal =strtotime('+1 days');
        echo $datumAlsGetal;
        // En vervolgens kunnen we dat getal ook doorgeven aan de date() functie
        $morgen= date('d-m-Y', $datumAlsGetal);
        echo "<br>".$morgen;
?>
<br>
<?php
    for ($tel = 0; $tel <7 ; $tel++)
    {
        $datumAlsGetal = strtotime("+$tel days");
        echo "<br>";echo date('d-m-Y', $datumAlsGetal);
        echo "en dit is dag";
        echo date('w', $datumAlsGetal);
        echo "in deze week";
    }
?>
<br>
<?php
/*
        $dagNamen = array("zondag","maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag");
        for ($tel = 0; $tel <7 ; $tel++)
        {
            $datumAlsGetal = strtotime("+$tel days");
            echo "<br>";
            echo date('d-m-Y', $datumAlsGetal);
            echo "en dit is dagnummer";
            echo date('w', $datumAlsGetal);
            echo "in deze week";
            echo "<br> dagnummer $dagnummer is een ".$dagNamen[$dagnummer];}?>
*/
?>
<br>
<a href="../index.php">Terug</a>
<?php include '../Includes/footer.php'; ?>
</body>
</html>
