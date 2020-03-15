<?php include '../hoofdstuk3/variabelen.php';?>
<?php
        date_default_timezone_set("Europe/Amsterdam");
        $uur = date("G");
?>
<?php

    if ($uur >= 0 && $uur < 5)
    {
        $groet = "Goedennacht bezoeker, &copy $name ".date("Y");
    }
    else if ($uur >= 5 && $uur < 12)
    {
        $groet = "Goedenochtend bezoeker, &copy $name ".date("Y");
    }
    else if ($uur >= 12 && $uur < 17)
    {
        $groet = "Goedenmiddag bezoeker, &copy $name ".date("Y");
    }
    else if ($uur >= 17 && $uur <= 24)
    {
        $groet = "Goedenavond bezoeker, &copy $name ".date("Y");
    }
    echo "
<footer>
    <p id='HoelaatIsHet'>
        $groet
    </p>
</footer>";
?>

