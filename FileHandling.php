<?php

//! Do not run all this code at once.

//* open a file and read ist contents
$filename = "test.txt";
$mode = "r";
$fp = fopen($filename, $mode);
$contents = fread($fp, filesize($filename));
echo $contents;
fclose($fp);

//* open a file and write to it
$filename = "test.txt";
$mode = "w";
$fp = fopen($filename, $mode);
fwrite($fp, "Hello World!");
fclose($fp);

//* copying contents of one file to another
$filename = "test.txt";
$mode = "r";
$copied_filename = "test1.txt";
$copied_mode = "w";
$fp = fopen($filename, $mode);
$fp2 = fopen($copied_filename, $copied_mode);
while(!feof($fp)) {
    fputs($fp2, fgetc($fp));
} 
fclose($fp);
fclose($fp2);

//* reverse contents
$filename = "test.txt";
$mode = "r";
$fp = fopen($filename, $mode);
$contents = fread($fp, filesize($filename));
echo strrev($contents);
fclose($fp);

//* Deleting a file
$status = unlink("test.txt");
if($status) {
    echo "File Deleted";
} else {
    echo "File Not Deleted";
}

//* renaming a file
if(rename("test.txt", "time.txt")) {
    echo "Renamed File"; 
} else {
    echo "File not renamed";
}


?>