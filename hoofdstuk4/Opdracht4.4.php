<?php
/**
 * User: Boris Vasic
 * Date: 19-2-2020
 * Time: 12:02
 * File: opdracht4.4.php
 */
$opdracht = "Opdracht 4.4";
include '../Includes/header.php'; ?>
    <body>
        <h1>
            Weekkalender komende week:
        </h1>
        <?php

        $dagNamen = array("zondag","maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag", "zondag");
        for ($day = 0; $day <8 ; $day++)
        {
            $datumAlsGetal = strtotime("+$day days");
            echo "<br>";
            echo "Dag ";
            echo date('w', $datumAlsGetal);
            echo " is ";
            echo "$dagNamen[$day] ";
            echo date('d-m-Y', $datumAlsGetal);
        }
        ?>
        <br>
        <br>
        <br>
        <a href="../index.php">Terug</a>
        <?php include '../Includes/footer.php'; ?>
    </body>
</html>
