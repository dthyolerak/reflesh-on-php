<?php
declare(strict_types=1);
 namespace App\Enum;
 class Status{
    public const PAID = "paid";
    public const PENDING = "pending";
    public const DECLINED = "declined";
    public String $status = "pending";

    public const ALL_STATUSES = [
        self::DECLINED => "Declined",
        self::PAID => "Paid",
        self::PENDING => "Pending"

    ];
    public function __construct()
    {
        
    }
 }