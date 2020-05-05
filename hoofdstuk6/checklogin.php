<?php
/**
 * User: Boris Vasic
 * Date: 5-5-2020
 * Time: 22:48
 * File: checklogin.php
 */
$opdracht = "checklogin";
include '../Includes/header.php'; ?>
<body>
<?php
if ($_POST['username'] == 'Abu'&& $_POST['password']== 'bekend')
{
    session_start();
    $_SESSION['username'] = $_POST['username'];
    header('location: welkom.php');
}
else
    {
        $message = "Ongeldige username/wachtwoord//{$_POST['username']}, probeer het nog eens.";
        include "opdracht6.1.php";
    }
?>
<br>
<a href="../index.php">Terug</a>
<?php include '../Includes/footer.php'; ?>
</body>
</html>
