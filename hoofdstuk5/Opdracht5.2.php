<?php
/**
 * User: Boris Vasic
 * Date: 19-2-2020
 * Time: 12:02
 * File: opdracht5.2.php
 */
$opdracht = "Opdracht 5.2";
include '../Includes/header.php'; ?>
<body>
    <h3>
        Taak 1
    </h3>
    <div class="well well-lg">
        <form action="form_data5.2.php" method="get">
            <label>Voor en achternaam: </label>
            <input name="fullname" type="text">
            <select name="reason2quit">
                <option value="slechte leraar">Slechte leraar</option>
                <option value="opleiding is niet voor mij">opleiding is niet voor mij</option>
                <option value="het is te moeilijk">Het is te moeilijk</option>
                <option value="ander opleiding gevonden">Ander opleiding gevonden</option>
            </select>
            <label>Leerjaar:</label>
            <input type="radio" name="year" value="1">1
            <input type="radio" name="year" value="2">2
            <input type="radio" name="year" value="3">3
            <input type="submit" name="verzend" value="verzend">
        </form>
    </div>
    <br>
<a href="../index.php">Terug</a>
<?php include '../Includes/footer.php'; ?>
</body>
</html>
