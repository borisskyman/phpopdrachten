<?php
/**
 * User: Boris Vasic
 * Date: 5-5-2020
 * Time: 22:48
 * File: checklogin.php
 */
$opdracht = "checklogin";
include '../Includes/header.php'; ?>
<?php
$authUsers = Array
(
    "Abu"=> "bekend",
    "Nordin"=> "onbekend",
    "BasZ"=> "654321",
    "Rosalie"=> "bloemblaadjes"
);

foreach ($authUsers as $key => $value)
{
    if ($_POST['username'] ==  $key && $_POST['password'] == $value)
    {
        session_start();
        $_SESSION['username'] = $_POST['username'];
        header('location: welkom.php');
    }
    else
    {
        $message = "Ongeldige username/wachtwoord//{$_POST['username']}, probeer het nog eens.";
        //include "opdracht6.1.php";

    }
}
echo $message;
?>
</body>
</html>
