<!--
TOPIC:
PHP - COOKIES

NOTES:
+ PHP Cookies are small files that are placed on the users computers
  by the web-server scripts (in this case PHP).
+ Cookies can be read from and written to thus enabling the server to 
  track or identify the user of the application.
+ Other uses of cookies are to track or send information across pages
  from the users machine rather than the server
+ PHP Function and Variable for Cookies:
    setcookie(): Creates a cookie on the client machine.
                 Update using the same function, different value
                 For deleting a cookie change to a past time,
                 using the setcooke() function
    $_COOKIE   : is the Cookie variable 

+ Sessions vs Cookies
   Session:
       - Its stored in the web server.
       - It is safer to use, as client cannot change it.
       - Expiration can not be set, session variables will expire once 
         the browser is closed.

   Cookies:
       - Stored in the client side web-browser cookies folder.
       - Not very safe, since data in it can be modified.
       - This is an expiration date associated to it.

FILE-NAME:
039_php_cookies.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->
<?php
   echo "<h3> Tinitiate.com PHP Cookies </h3>";
   echo "<h6> <font color=red> FILE NAME:- 039_php_cookies.php </font> </h6>";
   echo "</br>";
   echo "<hr>";

   // ================
   // Create a Cookie
   // ================
   
   // Create a cookie on the client side (Web Browser) can be created 
   // using the setcookie() function
   setcookie ( "Tinitiate"  // Name of the variable in the cookie.
              ,"Coding"     // Value of the named variable.
              ,time()+3600  // Time for cookie expiry, if not set cookie dies 
                            // once browser is closed
              ,"/"          // Path for which the cookie is valid (/) for all directories
              ,""           // Domain
              ,0            // Security
              );


   // =============================================
   // Reading a Cookie using $_COOKIE["Tinitiate"]
   // =============================================
   
   // Check if the cookie is set using the isset() funciton
   if (isset($_COOKIE["Tinitiate"]))
   {
      echo "Read Cookie using \$_COOKIE ".$_COOKIE["Tinitiate"];
   }
   
   // Updating Cooke value is also done by the "$_COOKIE"
   // A new vale can be assigned to the cooke value
   setcookie ( "Tinitiate"     // Name of the variable in the cookie.
              ,"PHP TUTORIALS" // NEW Value of the named variable.
              ,time()+3600     // Time for cookie expiry, if not set cookie dies 
                               // once browser is closed
              ,"/"             // Path for which the cookie is valid (/) for all directories
              ,""              // Domain
              ,0               // Security
              );


   
   // =========================================================
   // Deleting a Cookie By setting expiration date in the past
   // =========================================================
   
   // Check if the cookie is set
   if (isset($_COOKIE["Tinitiate"]))
   {
      // set the time older that current time
      setcookie( "Tinitiate", "", time() - 1, "/","", 0);
   }

   echo "<br/>[F5] Refresh to See the Updated Values"."<br/>";
?>
<!-- CODE-END -->
<!--
CODE-TAGS:
PHP Cookies Setcooke $_Cookie modify cookie delete cookie read cookie
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->