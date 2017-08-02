<?php

require_once __DIR__ . '/../vendor/autoload.php';

use LeanCloud\Client;
use LeanCloud\Engine\LeanEngine;
use LeanCloud\Engine\Cloud;

Client::initialize(
    'DydadQ13BTXMc2sQJESrHtDU-gzGzoHsz',
    '5RKfUGjnBhok3XnNiO5xriQm',
    'tSCe1ARqKd1to6FV6hbSt9dF'
);


$engine = new LeanEngine();
$engine->start();
