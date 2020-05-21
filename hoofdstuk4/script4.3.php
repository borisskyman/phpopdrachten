<?php

$task2 = "Lancering in: ";
$counter = 19;
while   ($counter > -1)
{
    $task2 = $task2.$counter;
    if ($counter > 0)
    {
        $task2 .= ",";
    }
    $counter--;
}
$task3 = "Lancering in: ";
for ($counter = 19; $counter > -1;)
{
    $task3 = $task3 . $counter;
    if ($counter > 0)
    {
        $task3 .= ",";
    }
    $counter--;
}
$task4 = "";
$counter2 = 1;
while ($counter2 < 7)
{
    $task4 .= "<h1>dit is de ".$counter2."e iteratie</h1>";
    $counter2++;
}
$task5 = "";
for ($counter2 = 1; $counter2 < 11;)
{
    if ($counter2 == 1)
    {
        $task5 .= "<table><tr>";
    }
    $task5 .= "<td>dit is de ".$counter2."e iteratie</td>";
    if ($counter2 == 10)
    {
        $task5 .= "</tr></table>";
    }
    $counter2++;
}
$task6 = "";
$YearDate = 2020;
while ($YearDate > 2001)
{
    if ($YearDate == 2020)
    {
        $task6 = "<p> in ".$YearDate." ben/word ik 18 jaar oud</p>";
    }
    else if ($YearDate > 2002)
    {
        $Age = $YearDate - 2002;
        $task6 .= "<p> in ".$YearDate." was ik ".$Age." jaar oud</p>";
    }
    else
    {
        $task6 .= "<p> in ".$YearDate." ben ik geboren</p>";
    }
    $YearDate--;
}
$task7 = "";
$YearDate = 2022;
while ($YearDate > 2001)
{
    if ($YearDate == 2022)
    {
        $task7 .= "<p> in ".$YearDate." ben ik 20 en word ik volwassenen</p>";
    }
    else if ($YearDate == 2021)
    {
        $Age = $YearDate - 2002;
        $task7 .= "<p> in ".$YearDate." word ik $Age </p>";
    }
    else if ($YearDate == 2020)
    {
        $task7 .= "<p> in ".$YearDate." ben ik 18 en word ik een adolescent</p>";
    }
    else if ($YearDate == 2014)
    {
        $Age = $YearDate - 2002;
        $task7 .= "<p>In $YearDate was ik $Age jaar oud en werd ik een puber </p>";
    }
    else if ($YearDate == 2010)
    {
        $Age = $YearDate - 2002;
        $task7 .= "<p>In $YearDate was ik $Age jaar oud en werd ik een tiener </p>";
    }
    else if ($YearDate == 2006)
    {
        $Age = $YearDate - 2002;
        $task7 .= "<p>In $YearDate was ik $Age jaar oud en werd ik een kleuter </p>";
    }
    else if ($YearDate == 2004)
    {
        $Age = $YearDate - 2002;
        $task7 .= "<p>In $YearDate was ik $Age jaar oud en werd ik een peuter </p>";
    }
    else if ($YearDate == 2002)
    {
        $task7 .= "<p> in ".$YearDate." ben ik geboren en was ik een baby</p>";
    }
    else
    {
        $Age = $YearDate - 2002;
        $task7 .= "<p> in ".$YearDate." was ik ".$Age." jaar oud</p>";
    }
    $YearDate--;
}
?>