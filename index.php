<?php
// show errors
error_reporting(E_ALL);
ini_set('display_errors','on');

// composer's class auto loading
require __DIR__.'/vendor/autoload.php';

// using entities for short names
use Entities\SubscriptionProgram;
use Entities\Subscriber;
use Entities\Video;
use Entities\Film;
use Core\Classes\Collection;

// create videos and film
$lordOfTheRings = new Video('The Lord of the Rings: The Fellowship of the Ring', 'Fantasy','232' );
$gameOfThrones = new Video('Game of Thrones','Adventure','243' );
$revolver = new Film('Revolver');

echo '$lordOfTheRings:';
var_dump($lordOfTheRings);

// fetching data from IMDB for Revolver
echo '$revolver:';
var_dump($revolver);
$revolver->imbd($revolver->getTitle());
echo '$revolver:';
var_dump($revolver);

// create subscription programs
$basicSubscriptionPrograms = new SubscriptionProgram('basic');
$premiumSubscriptionPrograms = new SubscriptionProgram('premium', '150', 25000);

// create subscribers
$mike = new Subscriber([
	'title' => 'Mike',
	'subscriptionProgram' => $basicSubscriptionPrograms,
	'status' => true,
	'watchedVideos' => new Collection([$revolver]),
	'interestedInVideos' => new Collection([$lordOfTheRings, $gameOfThrones])
]);
$alex = new Subscriber([
	'title' => 'Alex',
	'subscriptionProgram' => $premiumSubscriptionPrograms,
	'status' => false,
	'watchedVideos' => new Collection([$lordOfTheRings, $gameOfThrones]),
	'interestedInVideos' => new Collection([$revolver])
]);

// change Mike's subscription program to premium
echo '$mike:';
var_dump($mike);
$mike->setSubscriptionProgram($premiumSubscriptionPrograms);
echo '$mike:';
var_dump($mike);

