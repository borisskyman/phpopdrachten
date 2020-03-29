<?php
/**
 * User: Boris Vasic
 * Date: 29-3-2020
 * Time: 19:44
 * File: uitschrijving.php
 */
$opdracht = "uitschrijving";
include '../Includes/header.php'; ?>
    <body>
        <h1>
            Uitschrijfformulier KW1C
        </h1>
        <hr>
        <table>
            <tr>
                <td class="UitschrijfFormulier">
                    <label>Voor en achternaam</label>
                </td>
                <td class="UitschrijfFormulier">
                    <!-- Dit laat zien wat voor Volledige Naam u heeft ingevoerd op de vorige website -->
                    <?php
                          // echo "<pre>"
                         //// print_r($_GET);
                         // echo "</pre>";
                        print $_GET['fullname'];
                    ?>
                </td>
            </tr>
            <tr>
                <td class="UitschrijfFormulier">
                    <label>Studentnummer</label>
                </td>
                <td class="UitschrijfFormulier">
                    <!-- Dit laat zien wat voor Studentnummer u heeft ingevoerd op de vorige website -->
                    <?php print $_GET['StudentNumber']; ?>
                </td>
            </tr>
            <tr>
                <td class="UitschrijfFormulier">
                    <label>Datum van uitschrijving</label>
                </td>
                <td class="UitschrijfFormulier">
                    <!-- Dit laat zien welke Datum u heeft geselecteerd op de vorige website -->
                    <?php print $_GET['Date']; ?>
                </td>
            </tr>
            <tr>
                <td class="UitschrijfFormulier">
                    <label>Reden van uitschrijving</label>
                </td>
                <td class="UitschrijfFormulier">
                    <!-- Dit laat zien wat voor reden u heeft gevinkt op de vorige website -->
                    <?php print $_GET['reason2quit']; ?>
                </td>
            </tr>
            <tr>
                <td class="UitschrijfFormulier">
                    <label>Leerjaar</label>
                </td>
                <td class="UitschrijfFormulier">
                    <!-- Dit laat zien wat voor jaar u heeft gevinkt op de vorige website
                     Als er iets is ingevuld, wordt dat gelaten zien, zo niet, dan
                     staat erop dat er geen leerjaar is gekozen-->
                    <?php
                        if (isset($_GET['year']))
                        {
                            print "Leerjaar ".$_GET['year'];
                        }
                        else
                        {
                            print  "Leerjaar niet gekozen";
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td class="UitschrijfFormulier">
                    <label>Aanmelden bij de succesklas:</label>
                </td>
                <td class="UitschrijfFormulier">
                    <!-- Dit laat zien of u heeft gevinkt op de vorige website
                    Als u het heeft ingevuld, wordt dat gelaten zien, zo niet, dan
                    staat erop dat u zich niet heeft aangemeld voor de klas-->
                    <?php
                    if (isset($_GET['SucessClass']))
                    {
                        print $_GET['SucessClass'];
                    }
                    else
                    {
                        print  "Er is niet aangemeld voor de succesklas";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td class="UitschrijfFormulier">
                    <label>Verwijderen gegevens:</label>
                </td>
                <!-- Dit laat zien of u heeft gevinkt op de vorige website
                Als u het heeft ingevuld, wordt dat gelaten zien, zo niet, dan
                staat erop dat de gegevens niet verwijderd hoeft te worden-->
                <td class="UitschrijfFormulier">
                    <?php
                    if (isset($_GET['RemoveData']))
                    {
                        print $_GET['RemoveData'];
                    }
                    else
                    {
                        print  "Gegevens  hoeven  niet  te  worden verwijderd";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td class="UitschrijfFormulier">
                    <label>Reden van uitschrijving:</label>
                </td>
            </tr>
            <tr>
                <td class="UitschrijfFormulier">
                    <br>
                    <!-- Als u een bericht hebt achtergelaten wat
                     uitlegt waarom u stopt, word dat gelaten zien,
                     Als er niks ingevuld is, staat er niks op-->
                    <?php
                    if (isset($_GET['TextArea']))
                    {
                        print $_GET['TextArea'];
                    }
                    ?>
                </td>
            </tr>
        </table>
        <br>
        <a href="../index.php">Terug</a>
        <?php include '../Includes/footer.php'; ?>
    </body>
</html>
