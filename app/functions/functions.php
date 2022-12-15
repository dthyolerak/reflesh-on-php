<?php

function donnex(): int{
    return 1;
}
function donnex2(): string{
    return 'demo function';
}
function donnex3(float $x): float{
    return 1.3;
}

function donnex4(): int|float| array{
    return 4;
}

function donnex5(): mixed{
    return 'demo functin';
}
 function donnex6(): ?int {
    return 3.5;
 }
 function donnex7(): void{
    return;
 }
 $sum = 0;
 $sumNumbr = function (int|float|string ...$number) use($sum)  : int|float {
   
    $sum += array_sum($number);

    return $sum;
 };
 echo $sumNumbr(29,20,2,33,44,443,12,214);

//  $sum = array_map()
 
  echo donnex() . donnex2() . donnex3(7.9)  . donnex4() . donnex5();