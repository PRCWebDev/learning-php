<?php

/*
Step 1: Take the credit card number from the user input 4417123456789113

Step 2: Reverse the credit card number 3119876543217144

Step 3: Take each of the odd position digits and add them 3119876543217144
3 + 1 + 8 + 6 + 4 + 2 + 7 + 4 = 35
#2 NOTE: Think carefully about the logic for thisstep as it is ‘not required’ in the traditional sense of it being a separate step.  
Think about how it relates to Step 5.

Step 4: Take each of the even digits and multiply by 2 3119876543217144
1*2=2       9*2=18       7*2=14       5*2=10       3*2=6       1*2       1*2       4*2
If the resulting answer for each digit is greater than 9 then subtract 9 from the answer and then add the numbers together
2 +      9      +       5         +      1 +       6      +    2    +     2    +    8     = 35

Step 5: Add the totals from Step 3 and Step 4
35 + 35 = 70

Step 6: Take the total from Step 5 and check if it is divisible by 10 (with no remainder).  If it is then the card number is valid.
*/

//check if form submitted
if(isset($_POST['submit'])){
  //assign variables, total, incrementor
  $ccNumber = $_POST['cc'];
  $total = 0;
  $i = 1;

  //get last 4 digits
  $last4 = substr($ccNumber, -4, 4);

  //split string into array
  $ccNumber = str_split($ccNumber);

  //reverse array
  $ccNumber = array_reverse($ccNumber);

  //loop through the array and calculate
  foreach($ccNumber as $digit){
      //if even digit
      if($i % 2 == 0){
          //multiply by 2          
          $digit *= 2; // $digit = $digit * 2;
          //if digit > 9
          if($digit > 9){
              //subtract 9
              $digit -= 9; // $digit = $digit - 9;
          }
      }
      //total = total + digit 
      $total += $digit; // $digit = $total + $digit;
      //incrementor + 1
      $i++;
  }
  
  //check total / 10
  if($total % 10 == 0){   
      echo "Your credit card number with last 4 digits " . $last4 . " is valid"; //valid
  } else {
      echo "Your credit card number with last 4 digits " . $last4 . " is invalid"; //invalid
  }
} else { //outside of message check
  echo "Please visit form page";
}

