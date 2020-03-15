<?php
/**
 * User: Boris Vasic
 * Date: 9-3-2020
 * Time: 13:49
 * File: opdracht4.3.php
 */
$opdracht = "Opdracht 4.3";
include '../Includes/header.php'; ?>
<?php include 'script4.3.php'; ?>
    <body>
        <h1>
            <?php echo $task2 ?>
        </h1>
        <h1>
            <?php echo $task3 ?>
        </h1>
        <?php echo $task4; echo $task5; echo $task6; echo $task7; ?>
        <br>
        <a href="../index.php">Terug</a>
        <?php include '../Includes/footer.php'; ?>
    </body>
</html>
