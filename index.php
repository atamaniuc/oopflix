<?php

// show errors
error_reporting(E_ALL);
ini_set('display_errors','on');

// composer's class auto loading
require __DIR__.'/vendor/autoload.php';

$lordOfTheRings = new \Entities\Video(
	'The Lord of the Rings: The Fellowship of the Ring',
	'Fantasy',
	178
);

$gameOfThrones = new \Entities\Video(
	'Game of Thrones',
	'Adventure',
	56
);

var_dump($lordOfTheRings->toJson());
var_dump($gameOfThrones->toJson());


var_dump($lordOfTheRings->imbd($lordOfTheRings->getTitle()));
var_dump($gameOfThrones->imbd($gameOfThrones->getTitle()));

