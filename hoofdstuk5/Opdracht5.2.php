<?php
/**
 * User: Boris Vasic
 * Date: 19-2-2020
 * Time: 12:02
 * File: opdracht5.2.php
 */
$opdracht = "Opdracht 5.2";
include '../Includes/header.php'; ?>
<body>
    <h1>
        Uitschrijfformulier KW1C
    </h1>
    <hr>
    <!-- Formulier die de leerling van de website kan invoeren van desbetreffende informatie
    die hij wilt verzenden naar school voor het uitschrijven -->
    <form action="uitschrijving.php" method="get">
    <table>
        <tr>
            <td class="UitschrijfFormulier">
                <label>Voor en achternaam</label>
            </td>
            <td>
                <!-- U kunt hiermee text invoeren Hoe u volledig heet op de website-->
                <input name="fullname" type="text" class="UitschrijfingTextBox">
            </td>
        </tr>
        <tr>
            <td  class="UitschrijfFormulier">
                <label>Studentnummer</label>
            </td>
            <td  class="UitschrijfFormulier">

                <!-- U kunt hiermee text invoeren wat uw telefoonnummer is op de website met maximaal 7 nummers -->
                <input type="text" id="StudentNumber" name="StudentNumber" maxlength="7" class="UitschrijfingTextBox">
            </td>
        </tr>
        <tr>
            <td  class="UitschrijfFormulier">
                <label>Datum van uitschrijving</label>
            </td>
            <td  class="UitschrijfFormulier">

                <!-- U kunt hiermee Datum van uitschrijfing invoeren op de website-->
                <input type="date" name="Date" id="Date" class="UitschrijfingTextBox">
            </td>
        </tr>
        <tr>
            <td  class="UitschrijfFormulier">
                Reden van uitschrijving
            </td>
            <td  class="UitschrijfFormulier">
                <!-- Hiermee kunt u een optie uit selecteren waarom je stopt met de opleiding,
                 Er is altijd 1 geselecteerd -->
                <select name="reason2quit" class="UitschrijfingTextBox">
                    <option value="De inhoud spreekt me niet (meer) aan">De inhoud spreekt me niet (meer) aan</option>
                    <option value="opleiding is niet voor mij">opleiding is niet voor mij</option>
                    <option value="het is te moeilijk">Het is te moeilijk</option>
                    <option value="ander opleiding gevonden die mij leuker lijkt">ander opleiding gevonden die mij leuker lijkt</option>
                </select>
            </td>
        </tr>
        <tr>
            <td  class="UitschrijfFormulier">
                <label>Leerjaar</label>
            </td>
            <td  class="UitschrijfFormulier">
                <!-- U kunt kiezen uit 3 rondjes waarop je aangeeft in welk leerjaar je zit -->
                <input type="radio" name="year" value="1">1e leerjaar
                <br>
                <input type="radio" name="year" value="2">2e leerjaar
                <br>
                <input type="radio" name="year" value="3">3e leerjaar
            </td>
        </tr>
        <tr>
            <td  class="UitschrijfFormulier">
                <!-- Hiermee kunt u uit de vierkante box kiezen, of je wilt aanmelden
                 bij de succes klas of niet-->
                <input type="checkbox" id="SuccesClass" name="SucessClass" value="Aangemeld">
                <label for="SuccesClass">Ik wil me aanmelden bij de succesklas</label>
                <br>
                <!-- Hiermee kunt u uit de vierkante box kiezen, of je
                 je gegevens uit het systeem verwijderd wilt hebben of niet-->
                <input type="checkbox" id="RemoveData" name="RemoveData" value="JA">
                <label for="RemoveData">Verwijder mijn gegevens uit het systeem</label>
            </td>
        </tr>
        <tr>
            <td  class="UitschrijfFormulier">
                <label>Geef hieronder de reden van je uitschrijving op</label>

                <!-- U kunt hiermee text invoeren voor uw reden op de website -->
                <textarea id="Message" name="TextArea" rows="3" cols="40"></textarea>
            </td>
        </tr>
    </table>
        <br>
            <!-- Hiermee verstuurt u de ingevoerde gegevens uit naar uitschrijving.php -->
            <input type="submit" name="verzend" value="versturen">
        </form>
        <br>
        <a href="../index.php">Terug</a>
        <?php include '../Includes/footer.php'; ?>
    </body>
</html>
