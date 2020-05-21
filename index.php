<?php/**
 * User: Boris Vasic
 * Date: 5-2-2020
 * Time: 12:04 AM
 * File: index.php
 */?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="css/style.css">
        <title><?php print "pagina 1"; ?></title>
    </head>
    <body id="IndexBody">
    <header>
        <h1 id="UitwerkingenTitel"><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
    </header>
    <aside>
        <h2 id="Menu">Menu</h2>
        <ul>
            <li><span class="Hoofdstukken">Hoofdstuk 2</span>
                <ul>
                    <li>
                        <a href="hoofdstuk2/opdracht%202.1.php">Opdracht 2.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk2/opdracht%202.2.php">Opdracht 2.2</a>
                    </li>
                </ul>
                <br>
            </li>
            <li><span class="Hoofdstukken">Hoofdstuk 3</span>
                <ul>
                    <li>
                        <a href="hoofdstuk3/Opdracht3.1.php">Opdracht 3.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk3/Opdracht3.2.php">Opdracht 3.2</a>
                    </li>
                    <li>
                        <a href="hoofdstuk3/Opdracht3.3.php">Opdracht 3.3</a>
                    </li>
                </ul>
                <br>
            </li>
        <li><span class="Hoofdstukken">Hoofdstuk 4</span>
                <br>
                <ul>
                    <li>
                        <a href="hoofdstuk4/Opdracht4.1.php">Opdracht 4.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk4/Opdracht4.2.php">Opdracht 4.2</a>
                    </li>
                    <li>
                        <a href="hoofdstuk4/Opdracht4.3.php">Opdracht 4.3</a>
                    </li>
                    <li>
                        <a href="hoofdstuk4/Opdracht4.4.php">Opdracht 4.4</a>
                    </li>
                </ul>
            </li>
            <br>
            <li><span class="Hoofdstukken">Hoofdstuk 5</span>
                <br>
                <ul>
                    <li>
                        <a href="hoofdstuk5/Opdracht5.1.php">Opdracht 5.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk5/Opdracht5.2.php">Opdracht 5.2</a>
                    </li>
                    <li>
                        <a href="hoofdstuk5/Opdracht5.3.php">Opdracht 5.3</a>
                    </li>
                    <li>
                        <a href="hoofdstuk5/Opdracht5.4.php">Opdracht 5.4</a>
                    </li>
                    <li>
                        <a href="Eindopdracht%20Periode%203/login.php">Eindopdracht Periode 3</a>
                    </li>
                </ul>
            </li>
            <br>
            <li><span class="Hoofdstukken">Hoofdstuk 6</span>
                <br>
                <ul>
                    <li>
                        <a href="hoofdstuk6/opdracht6.1.php">Opdracht 6.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk6/Opdracht6.2.php">Opdracht 6.2</a>
                    </li>
                </ul>
            </li>
            <br>
            <li><span class="Hoofdstukken">Hoofdstuk 7</span>
                <br>
                <ul>
                    <li>
                        <a href="hoofdstuk7/Opdracht7.1.php">Opdracht 7.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk7/Opdracht7.2.php">Opdracht 7.2</a>
                    </li>
                </ul>
    </aside>
    <main id="wrapper">
        <h2>Uitwerkingen</h2>
    </main>
    <?php
    session_start();
    if (isset($_SESSION['username'])) {
        $bezoeker = $_SESSION['username']. "&nbsp;<a href ='/phpopdrachten/hoofdstuk6/loguit.php'>Loguit</a>";
    }
    else
    {
        $bezoeker = "onbekende bezoeker". "&nbsp;<a href='/phpopdrachten/hoofdstuk6/opdracht6.1.php'>Login</a>";
    }
    ?>
    <?php
    $name = "Boris Vasic";
    date_default_timezone_set("Europe/Amsterdam");
    $uur = date("G");
    if ($uur >= 0 && $uur < 5)
    {
        $groet = "Goedennacht $bezoeker, &copy $name ".date("Y");
    }
    else if ($uur >= 5 && $uur < 12)
    {
        $groet = "Goedenochtend $bezoeker, &copy $name ".date("Y");
    }
    else if ($uur >= 12 && $uur < 17)
    {
        $groet = "Goedenmiddag $bezoeker, &copy $name ".date("Y");
    }
    else if ($uur >= 17 && $uur <= 24)
    {
        $groet = "Goedenavond $bezoeker, &copy $name ".date("Y");
    }
    echo "
<footer>
    <p id='HoelaatIsHet'>
        $groet
    </p>
</footer>";
    ?>
    </body>
</html>