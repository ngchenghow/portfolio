<?php

require 'vendor/autoload.php';

// setting the access and configration to your database
$database = new \Filebase\Database([
    'dir' => '../filebase/database'
]);

// in this example, you would search an exact user name
// it would technically be stored as user_name.json in the directories
// if user_name.json doesn't exists get will return new empty Document
$item = $database->get('kingslayer');

// display property values
echo $item->first_name;
echo $item->last_name;
echo $item->email;

// change existing or add new properties
$item->email = 'example@example.com';
$item->tags  = ['php','developer','html5'];

// need to save? thats easy!
$item->save();


// check if a record exists and do something if it does or does not
if ($database->has('kingslayer'))
{
    // do some action
    echo "has kingslayer";
}

// Need to find all the users that have a tag for "php" ?
$users = $db->where('tags','IN','php')->results();

// Need to search for all the users who use @yahoo.com email addresses?
$users = $db->where('email','LIKE','@yahoo.com')->results();

?>