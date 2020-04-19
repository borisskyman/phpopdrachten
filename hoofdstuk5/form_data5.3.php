<?php
/**
 * User: Boris Vasic
 * Date: 30-3-2020
 * Time: 14:47
 * File: form_data5.3.php
 */
$opdracht = "form_data 5.3";
include '../Includes/header.php';
include '../Includes/functions.php'?>
    <body>
        <table>
            <tr>
                <th>
                    <label>Vraag</label>
                </th>
                <th>
                    <label>Antwoord</label>
                </th>
            </tr>
            <tr>
                <td>
                    <label>Naam</label>
                </td>
                <td>
                    <?php
                    // Geeft weer terug aan wat u heeft ingevuld
                    if (isset($_POST['Name']))
                    {
                        echo $_POST['Name'];
                    }
                    else
                    {
                        $returnWaarde = "Naam niet ingevoerd";
                        echo $returnWaarde;
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        Leeftijd
                    </label>
                </td>
                <td>
                    <!-- Geeft weer terug aan wat u heeft ingevuld -->
                    <?php
                    if (isset($_POST['Age']))
                    {
                        echo $_POST['Age'];
                    }
                    else
                    {
                        $returnWaardeLeeftijd = "Leeftijd niet ingevoerd";
                        echo $returnWaardeLeeftijd;
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        Gemeente
                    </label>
                </td>
                <td>
                    <!-- Geeft weer terug aan wat u heeft ingevuld -->
                    <?php
                    if (isset($_POST['Township']))
                    {
                        echo $_POST['Township'];
                    }
                    else
                    {
                        $returnWaardeGemeente = "Gemeente niet gekozen";
                        echo $returnWaardeGemeente;
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Inwoners</label>
                </td>
                <td>
                    <!-- Geeft weer terug aan wat u heeft ingevuld -->
                    <?php
                    if (isset($_POST['citizens']))
                    {
                        echo $_POST['citizens'];
                    }
                    else
                    {
                        $returnWaardeAantalBewoners = "Aantal bewoners niet ingevoerd";
                        echo $returnWaardeAantalBewoners;
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        Aantal besmet
                    </label>
                </td>
                <td>
                    <!-- Geeft weer terug aan wat u heeft ingevuld, of geet weer terug dat niks is ingevoerd-->
                    <?php
                    $AantalInfecteerd = $_POST['infected'];
                    if ($AantalInfecteerd == $AantalInfecteerd)
                    {
                        echo $_POST['infected'];
                    }
                    else
                    {
                        echo "Helaas is niks ingevoerd"; //
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        Kenissen besmet
                    </label>
                </td>
                <td>
                    <!-- Geeft weer terug aan wat u heeft ingevuld -->
                    <?php
                    if (isset($_POST['DoYouKnowThem']))
                    {
                        echo $_POST['DoYouKnowThem'];
                    }
                    else
                    {
                        $returnWaardeKenjeZe =  "niet ingevuld";
                        echo $returnWaardeKenjeZe;
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        <!-- Als er ja is geselecteerd, word dit melding gelaten zien,
                        zo niet geeft het geen melding in de tabel aan -->
                        <?php

                        if (isset($_POST['DoYouKnowThem']) && $_POST['DoYouKnowThem'] == "ja" )
                        {
                            echo "De kans is in realiteit groter omdat je via je eigen netwerk besmet kan raken.";
                        }
                        else
                        {
                            echo " "; // Or nothing at all
                        }
                        ?>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        Kans per ontmoeting op besmetting
                    </label>
                </td>
                <td>
                    <!-- Laat het risico kans zien van het ingevoerde nummer -->
                    <?php echoKans(); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        Kans is 1 op
                    </label>
                </td>
                <td>
                    <!-- Laat het risico kans zien van het ingevoerde nummer -->
                    <?php echo getKans1Op(); ?>
                </td>
            </tr>
            <tr>
                <td>

                    <!-- Vergelijkt hoeveel kans u ook heeft op andere dingen dat u heeft ingevuld als cijfer zoals een ongeluk -->
                    <?php
                    $kans1op = getKans1op();
                    echo vergelijkOorzaken($kans1op); ?>
                </td>
            </tr>
        </table>
        <br>
        <a href="../index.php">Terug</a>
        <?php include '../Includes/footer.php'; ?>
    </body>
</html>
