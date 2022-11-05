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
  echo donnex() . donnex2() . donnex3(7.9)  . donnex4() . donnex5();