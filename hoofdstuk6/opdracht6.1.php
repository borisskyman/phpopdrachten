<?php
/**
 * User: Boris Vasic
 * Date: 5-5-2020
 * Time: 22:23
 * File: opdracht6.1.php
 */
$opdracht = "Opdracht 6.1";
include '../Includes/header.php'; ?>
<body>
<form method="post" action="checklogin.php">
<label>
    Username:
</label>
    <input type="text" id="username" name="username">
<br>
<label>
    Wachtwoord:
</label>
    <input type="password" id="password" name="password">
<br>
<br>
    <input type="submit" name="submit" value="verzend">
</form>
<br>
<br>
    <a href="../index.php">Terug</a>
<br>
<?php include '../Includes/footer.php'; ?>
</body>
</html>
