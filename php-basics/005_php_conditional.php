<!--
TOPIC:
PHP - CONDITIONAL STATEMENTS

NOTES:
+ PHP IF ELSE Statements and Variations
+ PHP Swtich statements

FILE-NAME:
005_php_conditional.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->

<html>
   <body>
      <h3> Tinitiate.com PHP Operators. </h3>
      <h6> <font color=red> FILE NAME:- 005_php_conditional.php </font></h6>
      </br>
      <!-- PHP Code from here -->
      <?php
         // ==========================
         // PHP CONDITIONAL STATEMENTS
         // ==========================

         // ==============================
         // IF ELSE CONDITIONAL STATEMENTS
         // ==============================
         // executes code only if a specified condition is true
         
         
         //Single IF condition
         $A = 10;

         if ($A < 10)                        // Only one CONDITION
           {
              echo "$A is Less than 10"."</br>";     
              // This will execute only if the "IF" condition is true
           }

         // IF..ELSE Condition, 
         // Only one condition will execute in the below code block
         $A = 10;

         if ($A < 10)                        // CONDITION 1
           {
              echo "$A is Less than 10"."</br>";
           }
         else                                // CONDITION 2
           {
              echo "$A is Greater than 10"."</br>";
           }         

         // Multiple IF conditions
         // Only one condition will execute in the below code block
         $A = 10;

         if ($A < 10)                        // CONDITION 1
           {
              echo "$A is Less than 10"."</br>";
           }
         elseif ($A < 20)                    // CONDITION 2
           {
              echo "$A is equal to 10"."</br>";
           }
         else                                // CONDITION 3
           {
              echo "$A is Greater than 10"."</br>";
           }

         // ============================
         // SWTICH CONDITIONAL STATEMENT
         // ============================
         $Choice = 1;
         // Consider the following IF ELSE statement
           if ($Choice == 1) {
                echo "You Have Selected 1"."</br>";
            } elseif ($Choice == 2) {
                echo "You Have Selected 2"."</br>";
            } elseif ($Choice == 3) {
                echo "You Have Selected 3"."</br>";
            }
         // The above IF statement outputs: "You Have Selected 1";
            
         // SWTICH statement for the above IF..ELSE statement
         $Choice = 1;
         
         switch ($Choice) {
             case 1:
                 echo "You Have Selected 1"."</br>";
                 break;       
                 // Use break to prevent the code from running into 
                 //   the next case automatically    
             case 2:
                 echo "You Have Selected 2"."</br>";
                 break;
             case 3:
                 echo "You Have Selected 3"."</br>";
                 break;
         }
         // The above SWTICH statement outputs: "You Have Selected 1";
         
         
         // Swtich without Break
         $Choice = 1;
         
         switch ($Choice) {
             case 1:
                 echo "You Have Selected 1"."</br>";
             case 2:
                 echo "You Have Selected 2"."</br>";
             case 3:
                 echo "You Have Selected 3"."</br>";
         }

         // The above SWTICH statement outputs:
         // "You Have Selected 1";
         // "You Have Selected 2";
         // "You Have Selected 3";

      ?>
   </body>
</html>

<!-- CODE-END -->
<!--
CODE-TAGS:
PHP  CONDITIONAL STATEMENTS If else switch
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->
