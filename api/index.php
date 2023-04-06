<?php

use App\Kernel;
use Dotenv\Dotenv;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

$dotenv = Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
