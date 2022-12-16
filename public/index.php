<?php

//  require  "../app/PaymentGateway/Gospel/Transcation.php";
//  require  "../app/PaymentGateway/Gospel/Customer.php";
//  require  "../app/PaymentGateway/Music/Transcation.php";
//  require  "../app/Notification\Email.php";
 spl_autoload_register(function($class){
   $path = __DIR__ ."/../". lcfirst(str_replace("\\",'/', $class).".php");
    if(file_exists($path)){
        require $path;
    }
 });
 
use  App\PaymentGateway\Gospel\Transcation as GospelTranscation;
use App\PaymentGateway\Music\Transcation as MusicTranscation;


 var_dump(new GospelTranscation());
 var_dump(new MusicTranscation());