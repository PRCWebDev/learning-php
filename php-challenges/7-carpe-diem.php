<?php

/*
Produce suitable code to output the date in the following formats.    
Remember...you will need to set your default timezone first!    
The first one has been done for you:    
  1. Monday 6th April 2015  echo date(‘l jS F Y’);    
  2. Today is Tuesday    
  3. Monday 06 April, 2015    
  4. 2015/04/06 (Year / Month / Day)    
  5. Monday 6th April 2015, 3:12 PM      
  
  EXTENSION    Check if the current year is a leap year.  Echo out a suitable message to say if it is or is not. 
*/

// setting my timezone
date_default_timezone_set('Europe/Bucharest');

// 1.
echo date('l jS F Y');
echo "<br>";

// 2.
echo "Today is " . date('l');
echo "<br>";

// 3.
echo date('l d F, Y');
echo "<br>";

// 4.
echo date('Y/m/d');
echo "<br>";

// 5.
echo date('l jS F Y, g:i A');
echo "<br>";

// EXTENSION
if(date('L')){
  echo date('Y') . " is a leap year.";
} else {
  echo date('Y') . " is not a leap year.";
}