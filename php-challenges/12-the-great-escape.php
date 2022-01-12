<?php

/*
Your task is simply to take each of these sentences and output them in the browser using both single and double quotes.
  This​ ​is​ ​Sam​'​s apple!  
  Sam​ said​,​ "​Hello​,​ ​Colin​.​ How​'​s your ​new​ PHP course going​?".  
  Sam​'​s mother ordered a ​new​ book called ​"​A ​Day​ ​in​ my​​ Life​"​ from​ her ​local bookstore. 
     
+ EXTENSION
    Replace the name Sam with a variable $name and produce the required output. 
*/

$sentence1SingleQuotes = 'This​ ​is​ ​Sam\'​s apple!';
echo $sentence1SingleQuotes . "<br>";

$sentence2SingleQuotes = 'Sam​ said​,​ "​Hello​,​ ​Colin​.​ How​\'​s your ​new​ PHP course going​?".';
echo $sentence2SingleQuotes . "<br>";

$sentence3SingleQuotes = 'Sam​\'​s mother ordered a ​new​ book called ​"​A ​Day​ ​in​ my​​ Life​"​ from​ her ​local bookstore.';
echo $sentence3SingleQuotes . "<hr>";

$sentence1DoubleQuotes = "This​ ​is​ ​Sam​'​s apple!";
echo $sentence1DoubleQuotes . "<br>";

$sentence2DoubleQuotes = "Sam​ said​,​ \"​Hello​,​ ​Colin​.​ How​'​s your ​new​ PHP course going​?\".";
echo $sentence2DoubleQuotes . "<br>";

$sentence3DoubleQuotes = "Sam​'​s mother ordered a ​new​ book called ​\"​A ​Day​ ​in​ my​​ Life​\"​ from​ her ​local bookstore.";
echo $sentence3DoubleQuotes . "<hr>";

$name = "Sam";

$extension1SingleQuotes = 'This​ ​is​ ' . $name . '\'​s apple!';
echo $extension1SingleQuotes . "<br>";

$extension2SingleQuotes = $name . ' said​,​ "​Hello​,​ ​Colin​.​ How​\'​s your ​new​ PHP course going​?".';
echo $extension2SingleQuotes . "<br>";

$extension3SingleQuotes = $name . '\'​s mother ordered a ​new​ book called ​"​A ​Day​ ​in​ my​​ Life​"​ from​ her ​local bookstore.';
echo $extension3SingleQuotes . "<hr>";

$extension1DoubleQuotes = "This​ ​is​ $name'​s apple!";
echo $extension1DoubleQuotes . "<br>";

$extension2DoubleQuotes = "$name said​,​ \"​Hello​,​ ​Colin​.​ How​'​s your ​new​ PHP course going​?\".";
echo $extension2DoubleQuotes . "<br>";

$extension3DoubleQuotes = "$name'​s mother ordered a ​new​ book called ​\"​A ​Day​ ​in​ my​​ Life​\"​ from​ her ​local bookstore.";
echo $extension3DoubleQuotes . "<hr>";