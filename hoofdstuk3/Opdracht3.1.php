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
            $evenement = "Elfstedentocht";
            $AnderWoordVoorHetEvenement = "Alvestêdetocht";
            $SoortTocht = "schaatstocht";
            $WatvoorSoortijs = "natuurijs";
            $Organisatie = "Koninklijke Vereniging De Friesche Elf Steden.";
            $Hoofdstad = "Leeuwarden";
            $Landnaam = "Friesland";
            $AantalKeerVerreden = 15;
            $AantalKeerGereden = 1909;
            $AantalKeerGehouden = 1;
            $AantalKilometerLang = 200;

            $verhaal = "De ".$evenement." (Fries: ".$AnderWoordVoorHetEvenement.") is een ".$AantalKilometerLang." kilometer"."<br>".
                "lange ".$SoortTocht." over ".$WatvoorSoortijs." die word georganiseerd door."."<br>"."de ".$Organisatie." ".$Hoofdstad
                .","."<br>"."de hoofdstad van ".$Landnaam.", is start- en aankomstplaats. De"."<br>".$evenement." is inmiddels ".$AantalKeerVerreden.
                " maal verreden en werd voor het "."<br>"."eerst in ".$AantalKeerGereden." en word maximaal ".$AantalKeerGehouden." keer per winter"."<br>".
                "gehouden.";

            $verhaal2 = "De $evenement (Fries: $AnderWoordVoorHetEvenement) is een $AantalKilometerLang kilometer <br> lange $SoortTocht over $WatvoorSoortijs
                die word georganiseerd door <br> de $Organisatie $Hoofdstad, <br> de hoofdstad van $Landnaam, is start- en aankomstplaats. De <br> $evenement is inmiddels
                $AantalKeerVerreden maal verreden en werd voor het <br> eerst in $AantalKeerGereden en word maximaal $AantalKeerGehouden keer per winter <br> gehouden.";
            ?>
            <p class="VerhaalP">
                <?php
                echo $verhaal;
                ?>
            </p>
            <p class="VerhaalP">
                <?php
                echo $verhaal2;
                ?>
            </p>
        </div>
        <?php include '../Includes/footer.php'; ?>
    <a href="../index.php">Terug</a>
    </body>
</html>
