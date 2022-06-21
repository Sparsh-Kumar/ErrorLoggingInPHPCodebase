<?php

use MyApp\Data\Database;
use MyApp\Game\Player\Player;
use MyApp\Game\Game;
use MyApp\Game\GameController;

require_once realpath("bugsnag.phar");
require_once realpath("guzzle.phar");
require_once realpath("vendor/autoload.php");

$db = new Database();
$player = new Player();
$game = new Game();
$gameController = new GameController();

$bugsnag = Bugsnag\Client::make('e67c70d5585993301f4ac92650bb4fd7');
Bugsnag\Handler::register($bugsnag);

try {
    throw new Exception('Another Exception by Sparsh');
} catch (Exception $exception) {
    $bugsnag->notifyException($exception);
}
