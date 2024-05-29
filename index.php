<?php

session_start();

require_once "./vendor/autoload.php";


Dotenv\Dotenv::createImmutable(__DIR__)->load();

echo "<pre>";
// print_r($_SERVER);

require_once __DIR__ . '/routes/index.php';

