<?php
/**
 * User: Boris Vasic
 * Date: 23-3-2020
 * Time: 14:17
 * File: opdracht5.1.php
 */
$opdracht = "Opdracht 5.1";
include '../Includes/header.php'; ?>
    <body>
        <!-- Informatie over Restaria Kees Kroket -->
        <h1 class="RestariaText">
            Restaria Kees Kroket
        </h1>
        <p class="RestariaText">
            Visstraat 12
            <br>
            5211 DN's s-Hertogenbosch
            <br>
            073 613 6720
            <br>
            info@restariakeeskroket.nl
        </p>
        <!-- Formulier die de gebruiker van de website kan invoeren van desbetreffende informatie
            die hij wilt verzenden naar het bedrijf -->
        <form id="FormulierRestaria" action="form_data.php" method="get">
            <label class="FormulierLabelText">
                Bedrijfsnaam
            </label>
            <br>
            <!-- U kunt hiermee text invoeren Hoe uw bedrijfsnaam heet op de website-->
            <input type="text" id="CompanyName" name="CompanyName">
            <br>
            <label class="FormulierLabelText">
                Voornaam
            </label>
            <br>
            <!-- U kunt hiermee text invoeren wat uw Voornaam is op de website-->
            <input type="text" id="FirstName" name="FirstName">
            <br>
            <label class="FormulierLabelText">
                Achternaam
            </label>
            <br>
            <!-- U kunt hiermee text invoeren wat uw Achternaam is op de website-->
            <input type="text" id="LastName" name="LastName">
            <br>
            <label class="FormulierLabelText">
                Telefoon
            </label>
            <br>
            <!-- U kunt hiermee text invoeren wat uw telefoonnummer is op de website met maximaal 10 nummers -->
            <input type="text" id="PhoneNumber" name="PhoneNumber" maxlength="10">
            <br>
            <label class="FormulierLabelText">
                E-Mail
            </label>
            <br>
            <!-- U kunt hiermee uw e-mail invoeren op de website-->
            <input type="email" id="Email" name="Email">
            <br>
            <label class="FormulierLabelText">
                Bericht
            </label>
            <br>
            <!-- U kunt hiermee  lange text invoeren op de website -->
            <textarea id="TextArea" name="TextArea" rows="4" cols="62"></textarea>
            <br>
            <br>
            <!-- Hiermee verstuurt u de ingevoerde gegevens uit naar form_data.php -->
            <input type="submit" value="Versturen">
            <br>
            <br>
        </form>
        <a href="../index.php">Terug</a>
        <?php include '../Includes/footer.php'; ?>
    </body>
</html>
