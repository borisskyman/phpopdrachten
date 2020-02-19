<?php
/**
 * User: Boris Vasic
 * Date: 17-2-2020
 * Time: 15:12
 * File: opdracht3.2.php
 */?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="../css/style.css">
    <title><?php print "Opdracht 3.2"; ?></title>
</head>
    <body>
        <div>
            <?php
                        $trafficLightColor = "groen";
                        $ambulanceComing = false;
                        $driveOn = true;
                        if ($trafficLightColor == "groen" && $ambulanceComing == true)
                        {
                            echo "<p class='red'>U moet stoppen</p>";
                        }
                       else if ($trafficLightColor == "groen" && $ambulanceComing == false && $driveOn == true)
                        {
                            echo " <p class='green'>U mag doorrijden</p>";
                        }
                        else if ($trafficLightColor == "rood")
                        {
                            echo "<p class='red'>U moet stoppen</p>";
                        }
                        else if ($trafficLightColor == "oranje")
                        {
                            echo "<p class='orange'>U moet stoppen</p>";
                        }
                        else
                        {
                            echo "Fout ingevoerd";
                        }
                    ?>
                    <br> <br>
            <?php
                        $countryName = "België";
                        $currentAge = 12;
                        if ($countryName == "Zweden" && $currentAge >= 20 ||
                            $countryName == "Nederland" && $currentAge >= 18 ||
                            $countryName == "Cyprus" && $currentAge >= 17 ||
                            $countryName == "Bulgarije" && $currentAge >= 18 ||
                            $countryName == "België" && $currentAge >= 18)
                        {
                            echo "Je woont in ".$countryName." en bent ".$currentAge." jaar oud <br> <br>";
                            echo "Je mag hier sterke alcohol drinken";
                        }
                        else if ($countryName == "Zweden" && $currentAge >= 18 ||
                                 $countryName == "Nederland" && $currentAge >= 18 ||
                                 $countryName == "Cyprus" && $currentAge >= 17 ||
                                 $countryName == "Bulgarije" && $currentAge >= 18 ||
                                 $countryName == "België" && $currentAge >= 16)
                        {
                            echo "Je woont in ".$countryName." en bent ".$currentAge." jaar oud <br> <br>";
                            echo "Je mag hier zwakke alcohol drinken";
                        }
            ?>
        </div>
        <a href="../index.php">Terug</a>
    </body>
</html>
