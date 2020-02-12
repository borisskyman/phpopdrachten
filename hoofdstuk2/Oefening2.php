<?php

    $naam = "Boris Vasic";
    $woonplaats = "Nijmegen";
    $leeftijd = 17;
    $hobby1 = "Fietsen";
    $hobby2 = "Boxen thuis";
    $school = "KW1C";
    $studie = "A & MO";

?>
<h1>
    <?php
        echo "Profiel ".$naam;
    ?>
</h1>
<?php

    echo "<p>";
    echo "Mijn naam is ".$naam.".";
    echo "<p>";
    echo "Ik woon in ".$woonplaats.".";
    echo "<p>";
    echo "Ik ben ".$leeftijd." jaar.";
    echo "<p>";
    echo "Mijn hobbies zijn ".$hobby1." en ".$hobby2;
    echo "<p>";
    echo "Ik studeer sinds dit jaar op het ".$school." in de richting ".$studie;
?>