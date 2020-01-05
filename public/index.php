<?php

session_start();
require_once __DIR__ . '/../config/init_consts.php';
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../libs/rb.php';

$app = new Application\Application();