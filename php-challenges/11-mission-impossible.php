<?php

/*
Yesterday you received a strange message from HQ which simply said: ​str_rot13() 
Today you received a long coded message: 
Rafher gung lbh orpbzr snzvyvne jvgu cuc shapgvbaf nf gurl ner rkgerzryl hfrshy. 
Your task is to decode the message and act on it. 
*/

$string = "Rafher gung lbh orpbzr snzvyvne jvgu cuc shapgvbaf nf gurl ner rkgerzryl hfrshy.";

echo $string;

echo "<br>";

$decodedString = str_rot13($string);

echo $decodedString;

echo "<br>";

// Extension: code back the message

$codedString = str_rot13($decodedString);

echo $codedString;