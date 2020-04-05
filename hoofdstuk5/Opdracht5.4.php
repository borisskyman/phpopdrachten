<?php
/**
 * User: Boris Vasic
 * Date: 6-4-2020
 * Time: 01:08
 * File: opdracht5.4.php
 */
$opdracht = "Opdracht 5.4";
include '../Includes/header.php'; ?>
<body>
<br>
<form method="post">
    <label>
        Komt er een ambulance aan?
    </label>
    <!-- U kunt hieronder uit kiezen of de ambulance komt of niet.  -->
    <input type="radio" id="yes" name="ambulanceComing" value="Ja">Ja
    <input type="radio" id="no" name="ambulanceComing" value="Nee">Nee
    <br>
    <label>
        Stop lichtkleur?
    </label>
    <!-- U kunt hieronder uit kiezen welke kleur de stoplicht heeft  -->
    <input type="radio" id="Red" name="trafficLightColor" value="Rood">Rood
    <input type="radio" id="Green" name="trafficLightColor" value="Groen">Groen
    <input type="radio" id="Orange" name="trafficLightColor" value="Oranje">Oranje
    <br>
    <!-- Als u hierop klikt verstuurt het de ingevoerde gegevens terug -->
    <input type="submit" name="submit" value="verzend">
</form>
<?php
    //de action is hetzelfde script als het formulier, eerst testen of het formulier
    //verzonden is
         if (isset($_POST['submit']))
     {
         echo "<h3>Wat is de situatie en wat moet ik doen?</h3><div>";
         //Een van de of beide radiobuttons is/zijn niet aangevinkt
         // Als de stoplicht kleur niet is aangevinkt, of de ambulance vinkje, dan komt er dit melding te staan.
         if (!isset($_POST['trafficLightColor']) || !isset($_POST['ambulanceComing']))
         {
            echo "Of stoplichtkleur is onbekend of het is onbekend of de ambulance komt.";
         }
         else
          // Anders als het wel is aangevinkt, wordt de waarde van de vinkje weergegeven in de melding hieronder.
         {
            $trafficLightColor = $_POST['trafficLightColor'];
            $ambulanceComing = $_POST['ambulanceComing'];
            echo "Stoplicht staat op $trafficLightColor en er komt: $ambulanceComing een ambulance aan.";

             //Bepalen of je wel of niet mag doorrijden

             // Alleen als het stoplicht groen is en er komt geen ambulance, dan pas mag je doorrijden, anders
             // blijft het de melding U moet stoppen weergeven, tenzij je geen vinkjes aanklikt bij de formulier.
         if ($trafficLightColor == "Groen" && $ambulanceComing == 'Nee')
            {
                echo "<div class='green'>U mag doorrijden</div>";
            }
         else
             {
             echo " <div class='red'>U moet stoppen</div>";
             }
         }
         echo "</div>";
     }
 ?>
<br>
<a href="../index.php">Terug</a>
<?php include '../Includes/footer.php'; ?>
</body>
</html>
