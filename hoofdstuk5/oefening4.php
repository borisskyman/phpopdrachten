<?php
/**
 * User: Boris Vasic
 * Date: 19-2-2020
 * Time: 12:02
 * File: opdracht3.3.php
 */
$opdracht = "Opdracht 4.1";
include '../Includes/header.php'; ?>
<body>
<?php
include "functions.php";
            helloWorld();
$returnWaarde = getGoodbye();
echo $returnWaarde;
?>
<br>
<a href="../index.php">Terug</a>
<?php include '../Includes/footer.php'; ?>
</body>
</html>
