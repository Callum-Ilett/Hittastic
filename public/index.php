<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();
$app->setBasePath('/DFTI');

$dsn = 'mysql:host=localhost;dbname=ephp021';

$options = array(
	PDO::ATTR_PERSISTENT => true,
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
);

$connection = new PDO($dsn, 'root', 'root', $options);

$app->get('/', function (Request $request, Response $response, $args) use ($connection){
	echo '<h1>All Songs</h1>';
	$stmt = $connection->query("SELECT * FROM wadsongs");
	$stmt->execute();

	$songs = $stmt->fetchAll();

	foreach ($songs as $song) {
		$date = $song->day . ' ' . $song->month . ' ' . $song->year;
		echo 'Title: ' . $song->title . '<br>';
		echo 'Artist: ' . $song->artist . '<br>';
		echo 'Release Date: ' . $date . '<br>';
		echo 'Downloads: ' . $song->downloads . '<br>';
		echo 'Genre: ' . $song->genre . '<br>';
		echo 'Price: ' . $song->price . '<br>';
		echo '<br>';
	}

    return $response;
});

$app->get('/artist/{artist}', function(Request $request, Response $response, $args) use($connection){
	$artist = $args['artist'];
	echo '<h1>Songs by Oasis</h1>';

	$stmt = $connection->prepare("SELECT * FROM wadsongs WHERE artist = ?");
	$stmt->execute([$artist]);

	$songs = $stmt->fetchAll();

	foreach ($songs as $song) {
		$date = $song->day . ' ' . $song->month . ' ' . $song->year;
		echo 'Song: ';
		echo '<a href="/DFTI/artist/oasis/song/'.$song->title . '">' . $song->title . '</a>' . '<br>';
		echo '<br>';
	}

	return $response;
});

$app->get('/artist/{artist}/song/{song}', function(Request $request, Response $response, $args) use($connection){
	$artist = $args['artist'];
	$song = $args['song'];

	echo '<h1>' . $song . ' by ' . $artist . '</h1>';

	$stmt = $connection->prepare("SELECT * FROM wadsongs WHERE artist = ? AND title = ?");
	$stmt->execute([$artist, $song]);

	$song = $stmt->fetch();

	$date = $song->day . ' ' . $song->month . ' ' . $song->year;
	echo 'Release Date: ' . $date . '<br>';
	echo 'Chart: ' . $song->chart . '<br>';
	echo 'Likes: ' . $song->likes . '<br>';
	echo 'Downloads: ' . $song->downloads . '<br>';
	echo 'Genre: ' . $song->genre . '<br>';
	echo 'Price: ' . $song->price . '<br>';

	return $response;

});
$app->run();