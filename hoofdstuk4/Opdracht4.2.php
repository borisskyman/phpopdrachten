<?php
/**
 * User: Boris Vasic
 * Date: 4-3-2020
 * Time: 11:02
 * File: opdracht4.2.php
 */
$opdracht = "Opdracht 4.2";
include '../Includes/header.php'; ?>
<?php include 'script.php'; ?>
<link rel="stylesheet" href="../css/style.css">
    <body>
        <p id="WelkeVakEnDocentHebIk">
            <?php echo "voor het vak <span class='BoldSPAN'>$courseName</span> heb je <span class='BoldSPAN'>$teacherName</span> als docent." ?>
        </p>
    <a href="../index.php">Terug</a>
    <?php include '../Includes/footer.php'; ?>
    </body>
</html>
