<?php
/**
 * User: Boris Vasic
* Date: 15-4-2020
* Time: 12:02
* File: script.php
*/
// maakt de variabele aan genaamd showlogin scherm
$showLoginScreen = true;
// Maakt een  associatieve Array aan voor de gebruikers die wel mogen inloggen
$users = array
(
    "AbuSaebu" => "LeffeBlond",
    "TimKrul" => "Trompet",
    "Rosalie" => "Lente",
    "JanKnoop" => "Vindhamer",
    "JelleVanDijk" => "SnelleJelle",
    "Boris" => "Test",
    "Rowin" => "Rosmalen",
    "borisskyman" => "AirToTheSkyMan",
    "JoeyWheeler" => "FlameSwordsman",
    "Renji" => "Abarai"

);
// Maakt de variabele aan genaamd $message, deze wordt gebruikt als foutmelding
$message = "";
// Als er op de verzend knop is gedrukt, zal de password en username variabele opgeslagen worden
   if (isset($_POST['verzend']))
   {
      $username = $_POST['username'];
      $password = $_POST['password'];
      // De foreach-lus wordt voornamelijk gebruikt voor het doorlopen van de waarden van een array.
      // Het loopt over de array en elke waarde voor het huidige array-element wordt toegewezen aan $ waarde,
      // en de array-aanwijzer wordt door één vooruitgeschoven om naar het volgende element in de array te gaan.
      foreach ($users as $key => $value)
      {
         // print_r($_POST);
        // echo $key." ".$value."<br>";

         // Als de gebruikersnaam gelijk is aan sleutel en wachtwoord gelijk aan waarde (wachtwoord van opgeslagen gebruiker in de array),
         // Zal de loginscherm verdwijnen en komt er een ander scherm tevoren
         if ($username == $key && $password =$value)
         {
            return $showLoginScreen = false;
         }
         // Als er helemaal geen naam of wachtwoord is ingevoerd, zal de loginscherm nog steeds verdwijnen en komt er een ander scherm tevoren
         else if ($username == "" && $password == "")
         {
            return $showLoginScreen = false;
         }
         // Als wachtwoord of gebruikersnaam niet in de array gebruikers staat, zal er deze foutmelding in het rood komen te staan.
         else
         {
            $message = "Foutieve gebruikersnaam en / of wachtwoord!";
         }
      }
   }
?>
