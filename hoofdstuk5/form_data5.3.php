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
                    if (isset($_POST['Name']))
                    {
                        echo $_POST['Name'];
                    }
                    else
                    {
                        echo "Naam niet ingevoerd";
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
                    <?php
                    if (isset($_POST['Age']))
                    {
                        echo $_POST['Age'];
                    }
                    else
                    {
                        echo "Leeftijd niet ingevoerd";
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
                    <?php
                    if (isset($_POST['Township']))
                    {
                        echo $_POST['Township'];
                    }
                    else
                    {
                        echo "Gemeente niet gekozen";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Inwoners</label>
                </td>
                <td>
                    <?php
                    if (isset($_POST['citizens']))
                    {
                        echo $_POST['citizens'];
                    }
                    else
                    {
                        echo "Aantal bewoners niet ingevoerd";
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
                    <?php
                    if (isset($_POST['infected']))
                    {
                        echo $_POST['infected'];
                        $covidkans = $_POST['infected'];
                    }
                    else
                    {
                        echo "niet ingevoerd";
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
                    <?php
                    if (isset($_POST['DoYouKnowThem']))
                    {
                        echo $_POST['DoYouKnowThem'];
                    }
                    else
                    {
                        echo "niet ingevuld";
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
                    <?php getKans1Op(); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo vergelijkOorzaken($covidkans); ?>
                </td>
            </tr>
        </table>
        <br>
        <a href="../index.php">Terug</a>
        <?php include '../Includes/footer.php'; ?>
    </body>
</html>
