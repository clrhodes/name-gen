<?php require_once 'vendor/autoload.php';

use Clrhodes\NameGen\Generator;
use Clrhodes\NameGen\Recipes\Fantasy;

$generator = new Generator(new Fantasy);

var_dump($generator->name(2));
