<?php

require 'name.php';
require 'SECOND_MESSAGE.php';

use MyFirstProject\name ;
use MyFirstProject\ SECOND_MESSAGE;
{
$name = new name();
$name->name_complet();
}




{
$SECOND_MESSAGE = new SECOND_MESSAGE();
$SECOND_MESSAGE->message();
}