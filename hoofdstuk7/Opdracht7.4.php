<?php
/**
 * User: Boris Vasic
 * Date: 31-5-2020
 * Time: 17:26
 * File: opdracht7.1.php
 */
$opdracht = "Opdracht 7.1";
include '../Includes/header.php';
?>
<body>
    <form action="insert.php" method="post">
        <h1>
            Nieuwe grap toevoegen
        </h1>
        <label>
            Joketext
        </label>
        <input type="text" id="JokeTextMaker" name="JokeTextMaker" placeholder="Joketext komt hier">
        <br>
        <label>
            Jokeclou
        </label>
        <input type="text" id="JokeClouMaker" name="JokeClouMaker" placeholder="Jokeclou komt hier">
        <br>
        <input type="submit" value="Verstuur">
    </form>
        <br>
        <br>
    <br>
<a href="../index.php">Terug</a>
<?php include '../Includes/footer.php'; ?>
</body>
</html>
