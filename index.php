<?php

require __DIR__ . "/vendor/autoload.php";

setlocale(LC_COLLATE, 'nl_BE.utf8');

define('BASE_PATH', __DIR__);

use TextSeparator\Kernel\Application;

$application = new Application();

$application->index();