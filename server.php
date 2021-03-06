<?php

use SwooleRedis\Service;
use SwooleRedis\Structure\Common;
use SwooleRedis\Structure\Lists;
use SwooleRedis\Structure\Sets;
use SwooleRedis\Structure\Strings;

require __DIR__ . '/vendor/autoload.php';

$config = require __DIR__ . '/config/server.php';

$service = new Service($config['host'], $config['port']);

$service->addModules([
    Common::class,
    Strings::class,
    Lists::class,
    Sets::class
]);

$service->start();
