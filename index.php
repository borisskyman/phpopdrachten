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
            </li>
        </ul>
    </aside>
    <main id="wrapper">
        <h2>Uitwerkingen</h2>
    </main>
    </body>
</html>