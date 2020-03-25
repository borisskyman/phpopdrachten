<?php
/**
 * User: Boris Vasic
 * Date: 23-3-2020
 * Time: 14:21
 * File: form_data.php
 */
$opdracht = "form_data";
include '../Includes/header.php'; ?>
    <body>
        <table>
            <tr>
                <td>
                    Bedrijfsnaam:
                </td>
                <td>
                    <!-- Dit laat zien wat voor Bedrijfsnaam u heeft ingevoerd op de vorige website -->
                    <?php print $_GET["CompanyName"]; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Voornaam:
                </td>
                <td>
                    <!-- Dit laat zien wat voor Voornaam u heeft ingevoerd op de vorige website -->
                    <?php print $_GET["FirstName"]; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Achternaam:
                </td>
                <td>
                    <!-- Dit laat zien wat voor Achternaam u heeft ingevoerd op de vorige website -->
                    <?php print $_GET["LastName"]; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Telefoon:
                </td>
                <td>
                    <!-- Dit laat zien wat voor telefoonnummer u heeft ingevoerd op de vorige website -->
                    <?php print $_GET["PhoneNumber"]; ?>
                </td>
            </tr>
            <tr>
                <td>
                    E-Mail:
                </td>
                <td>
                    <!-- Dit laat zien wat voor E-Mail u heeft ingevoerd op de vorige website -->
                    <?php print $_GET["Email"]; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Bericht:
                </td>
                <td>
                    <!-- Dit laat zien wat voor Lange bericht u heeft ingevoerd op de vorige website -->
                    <?php print $_GET["TextArea"]; ?>
                </td>
            </tr>
        </table>
    </body>
</html>
