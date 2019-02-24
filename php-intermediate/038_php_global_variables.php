<!--
TOPIC:
PHP - Built-in Variables [SuperGlobals]

NOTES:
+ PHP Built-in Variables or SuperGlobals
+ They are available in all scopes (Inside or Outside a Function / Class)
+ \$_SERVER\[\'<CONTEXT>\'\] : Server Built-in / SuperGlobal is a  variable
  Which has various "CONTEXTS" which provides various Server and 
  execution environment information.

FILE-NAME:
038_php_global_variables.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->
<?php
   echo "<h3> Tinitiate.com PHP Built-in Variables or SuperGlobals </h3>";
   echo "<h6> <font color=red> FILE NAME:- 038_php_global_variables.php </font> </h6>";
   echo "</br>";
   echo "<hr>";

   // ==============================================================================
   // $_SERVER[] : SuperGlobal provides Server and execution environment information
   //              The context is enclosed in the square brackets "[]"
   // ==============================================================================
   
   // Sample Context Information
   echo "SERVER ADDRESS  ".$_SERVER['SERVER_ADDR'];
   echo "</br>";
   echo "SERVER NAME  ".$_SERVER['SERVER_NAME'];
   echo "</br>";
   echo "PHP SCRIPT NAME ".$_SERVER['SCRIPT_NAME'];
   echo "</br>";
   echo "WEB SERVER USED ".$_SERVER['GATEWAY_INTERFACE'];
   echo "</br>";
   echo "SCRIPT_FILENAME  ".$_SERVER['SCRIPT_FILENAME'];
   echo "</br>";
   
   // More CONTEXTs details on in official PHP documentation
?>
<!-- CODE-END -->
<!--
CODE-TAGS:
PHP SuperGlobals Built-in Global variables
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->
