<?php

/*
This task is based on using arrays and selecting random elements from arrays.    In a pack of playing cards there are 4 suits: ● clubs  ● diamonds  ● hearts  ● spades    There are 13 cards in each suit: ● Ace  ● 2  ● 3  ● 4  ● 5  ● 6  ● 7  ● 8  ● 9  ● 10  ● Jack  ● Queen  ● King
Your task is to create two arrays, one for the suits and one for the values.
You simply need to output the playing card to the user.
*/

$suits = ["Clubs", "Diamonds", "Hearts", "Spades"];

// echo "<pre>";
// print_r($suits);
// echo "<br>";

$values = ["Ace", "2", "3", "4", "5", "6", "7", "8", "9", "10", "Jack", "Queen", "King"];

// print_r($values);
// echo "<br>";

// $suitPosition = array_rand($suits);
// $suit = $suits[$suitPosition];
$suit = $suits[array_rand($suits)];


// $valuePosition = array_rand($values);
// $value = $values[$valuePosition];
$value = $values[array_rand($values)];

echo "Your card is $value of $suit.";