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
    <?php
            // echo "<pre>";
            // print_r($_GET);
            // echo "</pre>";

            echo $_GET['fullname'];
            echo "<br>".$_GET['reason2quit'];
            if (isset($_GET['year']))
            {
                echo "<br>Leerjaar ".$_GET['year'];
            }
            else
            {
                echo "<br>Leerjaar niet gekozen";
            }
    ?>
    </body>
</html>
