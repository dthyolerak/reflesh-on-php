<?php

 require  "../app/PaymentGateway/Gospel/Transcation.php";
 require  "../app/PaymentGateway/Gospel/Customer.php";
 require  "../app/PaymentGateway/Music/Transcation.php";
 require  "../app/Notification\Email.php";
use  App\PaymentGateway\Gospel\Transcation as GospelTranscation;
use App\PaymentGateway\Muisc\Transcation as MusicTranscation;


 var_dump(new GospelTranscation());
 var_dump(new MusicTranscation());