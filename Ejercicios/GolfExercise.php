<?php

$names = ["Hole-in-one!", "Eagle", "Birdie", "Par", "Bogey", "Double Bogey", "Go Home!"];

function golfScore($par, $strokes)
{
    global $names;
    $result = $par - $strokes;

    if ($strokes == 1){
        echo $names[0]."<br/>";
    } elseif($result >=2){
        echo $names[1]."<br/>";
    } elseif($result == 1){
        echo $names[2]."<br/>";
    } elseif ($result == 0){
        echo $names[3]."<br/>";
    } elseif ($result == -1){
        echo $names[4]."<br/>";
    } elseif ($result == -2){
        echo $names[5]."<br/>";
    } else {
        echo $names[6]."<br/>";
    }
}

golfScore(4, 1); #Hole in One
golfScore(4, 2); #Eagle
golfScore(5, 2); #Eagle
golfScore(4, 3); #Birdie
golfScore(4, 4); #Par
golfScore(1, 1); #Hole in One
golfScore(5, 5); #Par
golfScore(4, 5); #Bogey
golfScore(4, 6); #Double Bogey
golfScore(4, 7); #Go Home!
golfScore(5, 9); #Go Home!
?>