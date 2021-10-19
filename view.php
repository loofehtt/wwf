<?php
$filename = $_GET['file'];

$fp = fopen($filename, "r"); //mở file ở chế độ đọc

$contents = fread($fp, filesize($filename)); //đọc file

echo "<pre>$contents</pre>"; //in nội dung của file ra màn hình

// //how many lines?
// $linecount = 4;

// //what's a typical line length?
// $length = 40;

// //which file?
// $filename;

// //we double the offset factor on each iteration
// //if our first guess at the file offset doesn't
// //yield $linecount lines
// $offset_factor = 1;


// $bytes = filesize($filename);

// $fp = fopen($filename, "r") or die("Can't open $file");


// $complete = false;
// while (!$complete) {
//     //seek to a position close to end of file
//     $offset = $linecount * $length * $offset_factor;
//     fseek($fp, -$offset, SEEK_END);


//     //we might seek mid-line, so read partial line
//     //if our offset means we're reading the whole file, 
//     //we don't skip...
//     if ($offset < $bytes)
//         fgets($fp);

//     //read all following lines, store last x
//     $lines = array();
//     while (!feof($fp)) {
//         $line = fgets($fp);
//         array_Push($lines, $line);
//         if (count($lines) > $linecount) {
//             array_shift($lines);
//             $complete = true;
//         }
//     }

//     //if we read the whole file, we're done, even if we
//     //don't have enough lines
//     if ($offset >= $bytes)
//         $complete = true;
//     else
//         $offset_factor *= 2; //otherwise let's seek even further back

// }
// fclose($fp);

// var_dump($lines);
