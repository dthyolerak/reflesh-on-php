<?php
// match work as swich stetement the only differences are 
// match evaluete 
$e = 9;
$match = match($e){
    1 => "hello one",
    2,40 => "or match",
    7  => "and match"
};

echo $match;