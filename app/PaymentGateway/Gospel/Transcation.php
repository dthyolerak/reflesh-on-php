<?php

declare(strict_types = 1);
namespace App\PaymentGateway\Gospel;

use App\PaymentGateway\Gospel as GS;

class Transcation{
        public function __construct()
        {
            var_dump(new GS\Customer());
            var_dump(new \DateTime());
        }
        public function Payment() :int{
            
            return 1;
        }
}