<?php
/**
 * User: Boris Vasic
 * Date: 5-5-2020
 * Time: 22:36
 * File: loguit.php
 */
$opdracht = "loguit";
include '../Includes/header.php'; ?>
<body>
<?php

session_start();
session_destroy();
header('location: opdracht6.1.php');

?>
<br>
<a href="../index.php">Terug</a>
<?php include '../Includes/footer.php'; ?>
</body>
</html>
