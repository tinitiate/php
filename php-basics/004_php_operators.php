<!--
====================================================================================
   TOPIC: PHP - Operators
====================================================================================
 NOTES: * PHP Arithmetic Operators
        * PHP Assignment Operators  
        * PHP Comparison Operators
        * PHP Logical Operators
        * PHP Increment / Decrement Operators
        * PHP Comparison Operators
        * PHP Logical Operators for boolean variables
====================================================================================
 
 FILE-NAME       : 004_php_operators.php
 DEPENDANT-FILES : These are the files and libraries needed to run this program ;
                   N/A
 
 AUTHOR          : tinitiate.com / Venkata Bhattaram
                   (c) 2014
 
 DESC            : PHP Operators
 
====================================================================================
--->
 
<html>
   <body>
      <h3> Tinitiate.com PHP Operators. </h3>
      <h6> <font color=red> FILE NAME:- 004_php_operators.php </font></h6>
      </br>
      <!-- PHP Code from here -->
      <?php
         // ==============
         // PHP OPERATORS
         // ==============
 
         // ========================
         // PHP Arithmetic Operators
         // ========================
         // +   Addition       $A + $B
         // -   Subtraction    $A - $B
         // *   Multiplication $A * $B
         // /   Division       $A / $B
         // %   Modulus        $A % $B  Remainder $A / $B
 
         $A = 1; 
         $B = 9;
         echo $A + $B."</br>";  // output: 10
         echo $A - $B."</br>";  // output: -8
         echo $A * $B."</br>";  // output: 9
         echo $A / $B."</br>";  // output: 0.11111111111111
         echo $A % $B."</br>";  // output: 1
 
         // ========================
         // PHP ASSIGNMENT OPERATORS
         // ========================
 
         $A = 10;
         echo $A."</br>";   // output: 1
 
         $A += 100; // This is $A + 100
         echo $A."</br>";   // outputs 110
 
         $A -= 100; // This is $A - 100
         echo $A."</br>";   // outputs 10
 
         $A *= 10;  // This is $A * 10
         echo $A."</br>";   // outputs 100
 
         $A /= 10;  // This is $A/10
         echo $A."</br>";   // outputs 10
 
         $A %= 10;  // This is $A%10 reminder of
                    // $A/10
         echo $A."</br>";    // outputs 0
 
         // ===================================
         // PHP Increment / Decrement Operators
         // ===================================
 
         // ++$C  Pre-increments $C by one first and then returns $C
         $C = 1;
         echo ++$C."</br>"; // Output: 2
 
         // $C++  Post-increments $C by 1, meaning returns $C,
         // then increments $C by one
         $C=10;
         echo $C++."</br>"; // outputs 10
         echo $C++."</br>"; // outputs 11
 
         // $--C  Pre-decrements $C by 1, meaning returns $C-1
         $C=5;
         echo --$C."</br>"; // outputs 4
 
         // $C--  Post-decrements $C by 1, meaning returns $C,
         //          then decrements $C to
         return $C-1
         $C=5;
         echo $C--."</br>"; // outputs 5
         echo $C."</br>"; // outputs 4
 
         // =========================
         // PHP Comparison Operators
         // =========================
 
         /*
          ==   Equal                     $A == $B  True if $A is equal to $B
          ===  Identical                 $A === $B True if $A is equal to $B, and 
                                         both are of the same datatype
          !=   Not equal                 $A != $B  True if $A is not equal to $B 
          <>   Not equal                 $A <> $B  True if $A is not equal to $B
          !==  Not identical             $A !== $B True if $A is not equal to $B,
                                         or they are not of the same type
          >    Greater than              $A > $B   True if $A is greater than $B
          <    Less than                 $A < $B   True if $A is less than $B
          >=   Greater than or equal to  $A >= $B  True if $A is greater than or
                                         equal to $B
          <=   Less than or equal to     $A <= $B  True if $A is less than or equal
                                         to $B
         */
 
         // Here $A is integer and $B is a floating value
         $A = 10;
         $B = 10.00;
 
         // EQUAL OPERATOR (==) returns true as the value is same   
         if ($A == $B)
            {
               echo "$A and $B are Equal"."</br>";
            }
         else
            {         
               echo "$A and $B are NOT Equal"."</br>";
            }
 
         // IDENTICAL OPERATOR (===) returns false as the data types are different
         if ($A === $B)
            {
               echo "$A and $B are Identical"."</br>";
            }
         else
            {         
               echo "$A and $B are NOT Identical"."</br>";
            }
 
         // =========================================
         // PHP Logical Operators
         // This applies only for boolean variables
         // =========================================
         /*
         And     $A and $B  True if both   $A and $B are true
         Or      $A or  $B  True if either $A or  $B is true
         Xor     $A xor $B  True if either $A or  $B is true, but not both
         &&  And $A &&  $B  True if both   $A and $B are true
         ||  Or  $A ||  $B  True if either $A or  $B is true
         !   Not !$A        True if $B is not true
         */
 
         $A_BOOL = true;  // Create a boolean variable with true value
         $B_BOOL = false; // Create a boolean variable with false value
 
         // Testing Xor (True if either $A or  $B is true, but not both)
         if ($A_BOOL Xor $B_BOOL)
            {
               echo "XOR True"."</br>";
            }
         else
            {
               echo "XOR False"."</br>";
            }
      ?>
   </body>
</html>
 
<!--
====================================================================================
END OF CODE
====================================================================================
TAGS: PHP operators
====================================================================================
-->