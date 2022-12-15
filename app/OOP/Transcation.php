<?php
declare(strict_types=1);

class Transcation {
    public function __construct(private int $amount, private int $rate){
        $this->amount;
        $this->rate;
    }

    public function calculate(): int|float
    {   $amount = $this->amount * $this->rate / 100;
        return $amount;
    }

}