<?php
$handle = fopen("inputfile.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        // process the line read.
    }
} else {
    // error opening the file.
} 
fclose($handle);
?>
