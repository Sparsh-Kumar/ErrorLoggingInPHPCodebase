<?php

use MyApp\Data\Database;
use MyApp\Game\Player\Player;
use MyApp\Game\Game;
use MyApp\Game\GameController;

require_once realpath("vendor/autoload.php");

$db = new Database();
$player = new Player();
$game = new Game();
$gameController = new GameController();


