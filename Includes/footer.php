<?php include '../hoofdstuk3/variabelen.php';?>
<?php
        date_default_timezone_set("Europe/Amsterdam");
        $uur = date("G");
?>
<?php

    if ($uur >= 0 && $uur < 5)
    {
        $uur = "Goedennacht bezoeker, &copy Boris Vasic ".date("Y");
    }
    else if ($uur >= 5 && $uur < 12)
    {
        $uur = "Goedenochtend bezoeker, &copy Boris Vasic ".date("Y");
    }
    else if ($uur >= 12 && $uur < 17)
    {
        $uur = "Goedenmiddag bezoeker, &copy Boris Vasic ".date("Y");
    }
    else if ($uur >= 17 && $uur <= 24)
    {
        $uur = "Goedenavond bezoeker, &copy Boris Vasic ".date("Y");
    }
    echo "
<footer>
    <p>
        $uur
    </p>
</footer>";
?>

