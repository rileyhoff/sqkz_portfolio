<?php
//open artworks csv file and put into array
$myFileName = "data/artworks";
$fileExt = ".csv";
$filename = $myFileName . $fileExt;
$file = fopen($filename, "r");

/* the variable $file will be empty or false if the file does not open */
if ($file) {
    /* Tread the first row of headers */
    $headers = fgetcsv($file);
    
    while (!feof($file)) {
        $artworks[] = fgetcsv($file);
    }
    //closes the file
    fclose($file);

} // ends if file was opened
?>