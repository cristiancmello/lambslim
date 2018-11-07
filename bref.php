<?php

// BREF START APPLICATION
// THIS FILE IS CURRENTLY AS INDEX.PHP

require __DIR__.'/vendor/autoload.php';

$app = (new \LambSlim\Application\App())->getApp();
$app->run();