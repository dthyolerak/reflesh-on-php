<?php
declare(strict_types = 1);
namespace App\PaymentGateway\Music;

use App\Enum\Status;
use InvalidArgumentException;

class Transcation {


    public function __construct()
    {
        var_dump(Status::PAID);
        $this->setStatus(Status::PAID);
    }

    public function setStatus(string $status) :self {
        if (!isset(Status::ALL_STATUSES[$status])) {
            throw new \InvalidArgumentException("Invalid status given");
            
        }
        $this->status = $status;
        return $this;
    }
}