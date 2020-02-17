<?php/**
 * User: Boris Vasic
 * Date: 10-2-2020
 * Time: 14:38
 * File: opdracht2.2.php
 */?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="../css/style.css">
        <title><?php print "Opdracht 2.2"; ?></title>
    </head>
    <body>
        <div>
          <?php
            $text1 = "Hallo";
            $text2 = "Een makkelijke taal";
            $text3 = "toch zo'n makkelijke taal";
            $text4 = " wat is ";
            $text5 = "PHP ";
            $text6 = "Nooit gedacht dat ";
            $text7 = "De installatie is best ingewikkeld";
            $text8 = " Fijn toch";
            $text9 = "?";
            $text10 = ".";
            $text11 = ",";
            $text12 = "<br>";
            $text13 = " is";
            $text14 = " Vind je niet";
            ?>
            <h4 class="Opdracht2Punt2H4">
                Taak 2
            </h4>
            <p class="Opdracht2Punt2P">
                <?php
                    echo $text1.$text11.$text4.$text5.$text3.$text10;
                    echo $text12;
                    echo $text7.$text10.$text8.$text9;
                    echo $text12;
                    echo $text6.$text5.$text3.$text13;
                    ?>
            </p>
            <h4 class="Opdracht2Punt2H4">
                Taak 3
            </h4>
            <p class="Opdracht2Punt2P">
                <?php
                    echo $text1.$text11;
                    echo $text12;
                    echo $text8." dat ".$text5."zo'n makkelijke taal is".$text10;
                    echo $text12;
                    echo $text7.$text10.$text14.$text9;
                ?>
            </p>
        </div>
        <a href="../index.php">Terug</a>
    </body>
</html>
