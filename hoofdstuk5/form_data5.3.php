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
                    <!-- Geeft weer terug aan wat u heeft ingevuld -->
                    <?php
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
                        return "Leeftijd niet ingevoerd";
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
                        $returnWaarde = "Gemeente niet gekozen";
                        echo $returnWaarde;
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
                        $returnWaarde = "Aantal bewoners niet ingevoerd";
                        echo $returnWaarde;
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
                    <!-- Geeft weer terug aan wat u heeft ingevuld -->
                    <?php
                    if (isset($_POST['infected']))
                    {
                        echo $_POST['infected'];
                        $covidkans = $_POST['infected'];
                    }
                    else
                    {
                        $returnWaarde =  "niet ingevoerd";
                        echo $returnWaarde;
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
                        $returnWaarde =  "niet ingevuld";
                        echo $returnWaarde;
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        De kans is in realiteit groter omdat je via je eigen netwerk besmet kan raken.
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
                    <?php echo vergelijkOorzaken($covidkans); ?>
                </td>
            </tr>
        </table>
        <br>
        <a href="../index.php">Terug</a>
        <?php include '../Includes/footer.php'; ?>
    </body>
</html>
