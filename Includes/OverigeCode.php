<?php
/**
 * User: Boris Vasic
 * Date: 19-2-2020
 * Time: 12:02
 * File: functions.php
 */
$opdracht = "functions";
include '../Includes/header.php'; ?>
<body>
<?php
/**Dit zit in functions.php*/
//declaratie van de functie helloWorld
function helloWorld()
{
    echo "<h2>Hallo wereld</h2>";
}?>
<?php
/*Deze functie zit ook in functions.php*/
/*declaratie van de functie helloWorld*/
function getGoodbye()
{
    return "<h3>en tot ziens</h3>";
}
?>
