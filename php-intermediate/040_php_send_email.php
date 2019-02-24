<!--
TOPIC:
PHP - Sending email

NOTES:
+ PHP email settings in PHP.ini_get
 The following is a sample setup for windows and UNIX to specify the SMTP email.
---------------------------------------------------
  [mail function]
  ; For Win32 only.
  SMTP = my.smtp.server

  ; For win32 only
  sendmail_from = admin@tinitiate.com

  ; For Unix only
  sendmail_path = /usr/sbin/sendmail -t -i
---------------------------------------------------
+ PHP Send plain text email
+ PHP send email Multiple recipients
+ PHP Send HTML email
+ PHP Send email attachment

FILE-NAME:
040_php_send_email.php

DEPENDANT FILES LIBRARIES NEEDED TO RUN THIS PROGRAM:
N/A

AUTHOR:
tinitiate.com / Venkata Bhattaram  (c) 2014
--> <!-- CODE-START --->
<?php
   echo "<h3> Tinitiate.com PHP Send Email </h3>";
   echo "<h6> <font color=red> FILE NAME:- 040_php_send_email.php </font> </h6>";
   echo "</br>";
   echo "<hr>";


   // ===============================
   // Send plain text Email from PHP
   // ===============================
   
   $to      = "buddy@example.com";
   $subject = "Plain Text Email";
   $body    = "This is an email from tinitiate.com";
   $headers = "From: me@example.com"    . "\r\n" .
              "CC:   ccbuddy@example.com" . "\r\n" . 
              "BCC:  bccbuddy@example.com";

   // Using mail function to send the email
   mail($to,$subject,$body,$headers);


   // =========================
   // Send HTML Email from PHP
   // =========================

   $to      = "buddy@example.com";
   $subject = "HTML subject";

   $body = "
   <html>
   <h1> This is a HTML email</h1>
   <body>
   <p>This is tinitiate.com</p>
   </body>
   </html>";

   // Always set content-type when sending HTML email
   $headers = "MIME-Version: 1.0" . "\r\n";
   $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

   // More headers
   $headers = "From: me@example.com"    . "\r\n" .
              "CC:   ccbuddy@example.com" . "\r\n" . 
              "BCC:  bccbuddy@example.com";

   // Using mail function to send the email
   mail($to,$subject,$message,$headers);
   
   
   // ================================
   // Send Email attachments from PHP
   // ================================
   
   // Sender and Receiver details
   $sender_name
   $receiver_name 

   // File for attachment
   $filename       = "/myfolder/";
   $filepath       = "data.doc"; 
   $file_path_name = $filename . $filepath;
   $file_size      = filesize($file_path_name);
   $handle         = fopen($file_path_name, "r");
   $content        = fread($handle, $file_size);
   fclose($handle);

   // Building the message 
   $content = chunk_split(base64_encode($content));
   $unq_id = md5(uniqid(time()));
   $name = basename($file);

   // Build the header
   $header  = "From: " . $sender_name . " \r\n";
   $header .= "Reply-To: " . $receiver_name . "\r\n";
   $header .= "MIME-Version: 1.0\r\n";
   $header .= "Content-Type: multipart/mixed; boundary=\"".$unq_id."\"\r\n\r\n";
   $header .= "This is a multi-part message in MIME format.\r\n";
   $header .= "--".$unq_id."\r\n";

   $header .= "Content-type:text/plain; charset=iso-8859-1\r\n";
   $header .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
   $header .= $message."\r\n\r\n";
   $header .= "--".$unq_id."\r\n";

   $header .= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n";
   $header .= "Content-Transfer-Encoding: base64\r\n";
   $header .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
   $header .= $content."\r\n\r\n";
   $header .= "--".$unq_id."--";

   // Send the email
   // Check the success as the mail
   if (mail($mailto, $subject, "", $header)) {
       echo "mail sent successfully";
   } else {
       echo "mail not sent";
   }   

?>

<!-- CODE-END -->
<!--
CODE-TAGS:
PHP send email html email attachment from PHP
CODING BY TINITIATE.COM / VENKATA BHATTARAM
TAGS-END -->