<?php
declare(strict_types=1);
require "./OOP/Transcation.php";
mysqli_connect()
// $transcation = (new Transcation(100, 20))->calculate();
// var_dump($transcation);

$handle = fopen('text.txt','w');
echo $handle;
fwrite($handle, "hello there");
fclose($handle);