<?php

use App\Enum\Status;
use App\PaymentGateway\Music\Transcation as MusicTranscation;
require  __DIR__ ."/../vendor/autoload.php";


$musicTranscation = new MusicTranscation();
// echo $musicTranscation::STATUS_DECLINED;
var_dump($musicTranscation->setStatus(lcfirst(Status::PAID)));