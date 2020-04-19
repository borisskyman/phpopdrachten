<?php
/**
 * User: Boris Vasic
 * Date: 15-4-2020
 * Time: 11:59
 * File: Eindopdracht.php
 */
$opdracht = "login";
include '../Includes/header.php';
include "script.php";
?>
<body>
<h1>
    Bergheen
</h1>
<?php
        // Als de waarde van de loginscherm waar is, (wat standaard aan is bij het opstarten van de website), Moet u inloggen
        // En ziet u alleen het inlog gedeelte van de website
        if ($showLoginScreen == true){

?>
<h4 class="EO3AlgemeenTekstOpmaak">
    Login om onze adresgegevens + openingstijden te zien
</h4>
<p id="foutmeldingEindopdrachtP3">
    <?php echo $message ?>
</p>
<div>
    <?php
        // Deze formulier bekijkt of u de juiste ingevoerde
    // naam en wachtwoord hebt ingevoerd zodat u de rest van de website kan toebeheren.
    ?>
    <form method="post" action="login.php">
        <label class="EO3AlgemeenTekstOpmaak">username</label>
        <input type="text" name="username" class="EO3AlgemeenTekstOpmaak">
        <br>
        <label class="EO3AlgemeenTekstOpmaak">password</label>
        <input type="password" name="password" class="EO3AlgemeenTekstOpmaak">
        <br>
        <br>
        <input type="submit" name="verzend" value="login" class="EO3AlgemeenTekstOpmaak" id="EO3button">
    </form>
</div>
<?php include '../Includes/footer.php'; ?>
<a href="../index.php">Terug</a>
<?php
// Als u succesvol heeft ingelogd, ziet u de openingstijden van Bergheen en de Adresgegevens
?>
<?php } else { ?>
<h3 id="EO3welkom">Welkom!</h3>
    <fieldset id="EindopdrachtP3FieldSetOne">
        <legend class="EO3AlgemeenTekstOpmaak">
            Openingstijden
        </legend>
    <label class="EO3AlgemeenTekstOpmaak">
        Do: 22:00
    </label >
        <br> <br>
    <label class="EO3AlgemeenTekstOpmaak">
        Vr: All Day
    </label>
        <br> <br>
    <label class="EO3AlgemeenTekstOpmaak">
        Za: All Day
    </label>
        <br> <br>
    <label class="EO3AlgemeenTekstOpmaak">
        Zo: 12:00
    </label>
    </fieldset>
    <fieldset id="EindopdrachtP3FieldSetTwo">
        <legend class="EO3AlgemeenTekstOpmaak">
            Adresgegevens
        </legend>
    <label class="EO3AlgemeenTekstOpmaak">
        Am Wriezener Bahnhof
    </label>
        <br> <br>
    <label class="EO3AlgemeenTekstOpmaak">
        10243 Berlin
    </label>
        <br> <br>
    <label class="EO3AlgemeenTekstOpmaak">
        Duitsland
        </label>
    </fieldset>
<h4 class="EO3Gegevens">
    Deze gegevens dien je ten alle tijden geheim te houden!
</h4>
<a class="EO3Gegevens" id="EO3TerugNaarVorigePaginaLink" href="../index.php" >Terug</a>
<?php } ?>
</body>
</html>
