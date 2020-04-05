<?php
/**
 * User: Boris Vasic
 * Date: 30-3-2020
 * Time: 14:37
 * File: opdracht5.3.php
 */
$opdracht = "Opdracht 5.3";
include '../Includes/header.php'; ?>
    <body>
        <h1>
            Corona enquete:
        </h1>
        <hr>
        <form action="form_data5.3.php" method="post">
            <table>
                <tr>
                    <td>
                        <label>Wat is je naam:</label>
                    </td>
                    <td>
                        <!-- Hiermee kunt u uw naam invullen -->
                        <input type="text" name="Name">
                    </td>
                </tr>
                <tr>
                    <td>
                        <!-- Hiermee kunt u uw leeftijd invullen -->
                        <label>Wat is je leeftijd:</label>
                    </td>
                    <td>
                        <input type="text" name="Age">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Gemeente</label>
                    </td>
                    <td>
                        <!-- U kunt hiermee kizezen uit welk gemeente u vandaan komt -->
                        <select name="Township">
                            <option value="Nijmegen">Nijmegen</option>
                            <option value="Denbosch">Denbosch</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            Aantal inwoners gemeente:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="citizens">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            Ken je de mensen die besmet zijn in je woonplaats?
                        </label>
                    </td>
                    <td>
                        <!-- Hiermee kunt u uit de 2 rondjes uitkiezen, of u mensen kent die besmet zijn in uw woonplaats -->
                        <input type="radio" name="DoYouKnowThem" value="ja" checked>Ja
                        <input type="radio" name="DoYouKnowThem" value="nee">Nee
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            Aantal mensen besmet in je gemeente?
                        </label>
                    </td>
                    <td>
                        <!-- Hiermee geeft u aan hoeveel aantallen mensen besmet zijn in je gemeente -->
                        <input type="text" name="infected">
                    </td>
                </tr>
            </table>
            <input type="submit" name="verzend" value="verzend">
            <br>
            <br>
            <!-- Hiermee kunt u naar de website gaan om de aantal geverifieerde corona patienten er zijn te bekijken, of het aantal stijgt of daalt
             na mater tijd-->
            <label>* Zie aantallen per gemeente per 100.000 bewoners</label>
            <a href="https://www.rivm.nl/actuele-informatie-over-coronavirus">Site RIVM</a>
        </form>
        <br>
        <a href="../index.php">Terug</a>
        <?php include '../Includes/footer.php'; ?>
    </body>
</html>
