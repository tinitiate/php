<!--
TOPIC:
PHP FORMS - TEXT AREA

NOTES:
+ PHP Forms TEXT Area
+ All form elements are placed in the <FORM> tag.
+ Text AREA in HTML are areas where we can enter multi-line text.
+ Text Areas in this program are populated / set text boxes from a PHP 
  Variables after an action a button press.

FILE-NAME:
010_php_forms_text_area1.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->

<html>
   <body>
      <h3> Tinitiate.com PHP FORMS Text Area are populated / set text boxes <br/>
           from a PHP Variables after an action, a button press.
      </h3>
      <h6> <font color=red> FILE NAME:- 010_php_forms_text_area1.php </font> </h6>
      </br>
      <!-- HTML FORM Code to create Text Area -->
      <?php
         // Create PHP Variables that can be used to populate the FORMS
         // Text Area
         $TextArea1 = "Tinitiate, PHP FORM Tutorials, with images and code,
                       easy to understand !!";
      ?>
      <hr>
      <h6> <font color=blue> The Below text area is populated from a PHP variable. 
      </font> </h6>
      <!-- HTML FORM Text Area populated from PHP variables -->
      <form>
         <textarea name="TextArea1" rows="10" cols="30">
         <?php echo $TextArea1; ?>
         </textarea>
      </form>
   </body>
</html>

<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Forms Text Area Setting values of Text Area
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->