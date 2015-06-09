<?php require_once 'vendor/autoload.php';

use Eklundchristopher\NameGen\Generator;
use Eklundchristopher\NameGen\Recipes\Fantasy;

$generator = new Generator(new Fantasy);

var_dump($generator->name(2));
