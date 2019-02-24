<!--
TOPIC:
PHP - CONTROL STATEMENTS LOOPS

NOTES:
* PHP Loops and Variations in Loops
* Loops are control statements to make a same block of code
  execute over and over.
* for -       loops through a code-block a specified number of times
* foreach -   loops through a code-block for each element in an array
* while       loops through a code-block as long as a specified 
              condition remains true.
* do...while  loops through a code-block the first time, and continues
              to loop as long as the specified condition is true.

FILE-NAME:
006_php_loops.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->

<html>
   <body>
      <h3> Tinitiate.com PHP Loops. </h3>
      <h6> <font color=red> FILE NAME:- 006_php_loops.php </font></h6>
      </br>
      <!-- PHP Code from here -->
      <?php
      
      // =========
      // FOR LOOP
      // =========
      // ========================================================
      // FOR LOOP expects 3 parameters 
      // for (INITIAL COUNTER; UPPER BOUND; INCREMENTER)
      // for ($i=1; $i<=5; $i++)
      // * The initial value of the counter is 1
      // * The upper bound is when the loop ends is 5
      // * and the incrementer is "1", loop code-block executes
      //   for every one iteration
      // ========================================================
      echo "FOR LOOP EXAMPLE<br>";
      for ($i=1; $i<=5; $i++)
      // BELOW is the CODE-BLOCK which executes 5 times
      {
         echo "Iteration Counter: $i <br>";
      }

      // ==============
      // FOR EACH LOOP
      // ==============

      // The foreach is used to loop through each element in an array.
      echo "FOR EACH LOOP EXAMPLE<br>";
      $programming = array("PHP","PYTHON","PERL","JAVA", "RUBY"); 
      foreach ($programming as $data)
      {
         echo "$data <br>";
      }

      // ============
      // While Loop
      // ============
      echo "WHILE LOOP EXAMPLE<br>";
      // This loop runs until a predefined condition is TRUE
      // Create a Variable with a value
      $k=1;
      // Check if $k is less than or equal to 5
      while($k<=5)
      {
         echo "Current Iteration: $k <br>";
         $k++;  // Increment $k
      }

      // ===============
      // Do While Loop
      // ===============
      //
      echo "WHILE LOOP EXAMPLE<br>";
      // Create a variable with a value
      $l=1;
      // Execute the loop once, Notice the WHILE is outside the do { }
      do
        {
           echo "Loop Counter: $l <br>";
           $l++;
        }
      while ($l<=5)  // The loop continues to execute until the condition is false.

      ?>
   </body>
</html>

<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Loops For Loop While Loop do while loop
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->