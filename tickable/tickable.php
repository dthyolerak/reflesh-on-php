<?php
$x = 3;
$y = 7;
$z = $x + $y;

function onTick(){
    echo 'Tick <br />';
}
register_tick_function('onTick');
declare(ticks =1 );
$i = 0;
$length = 10;
while($i < $length){
    echo $i ++ . '<br />';
}