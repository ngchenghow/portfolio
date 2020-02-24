<?php

$to_email_address="ngchenghow@gmail.com";
$subject="mail test";
$message="testing content";
$headers = 'From: ngchenghow@gmail.com';

mail($to_email_address,$subject,$message,[$headers]);


?>