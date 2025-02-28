<?php
$hit_count = 0;

$file_name = "hitcount.txt";

// Read current hit count
if(file_exists($file_name)){
    $hit_count = file_get_contents($file_name);
}

// Increment hit countk
$hit_count++;
file_put_contents($file_name, $hit_count);

// Output hit count
echo $hit_count;
?>
