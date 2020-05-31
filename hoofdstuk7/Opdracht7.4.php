<?php
/**
 * User: Boris Vasic
 * Date: 31-5-2020
 * Time: 17:26
 * File: opdracht7.4.php
 */
$opdracht = "Opdracht 7.4";
include '../Includes/header.php';
?>
<body>
    <!-- Formulier voor het invoeren van grappen, nadat u op verzenden
     klikt wordt u geredirect naar het volgende pagina genaamd insert.php
     -->
    <form action="insert.php" method="post">
        <h1>
            Nieuwe grap toevoegen
        </h1>
        <label>
            Joketext
        </label>
        <!-- placeholder zorgt ervoor dat je text ziet in de formulier als er niks in staat,
        het legt uit wat je in de textveld kan invoeren -->
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
