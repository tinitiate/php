<?php    

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