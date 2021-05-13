<?php

include ('TennisGame.php');

$tennisGame = new TennisGame();

$score = $tennisGame->getScore(6, 8);

echo $tennisGame;