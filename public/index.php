<?php

$path = $_SERVER['PATH_INFO'] ?? '/';

match ($path) {
     '/' => require_once __DIR__ . '/../view/home.php',
     '/dashboard' => require_once __DIR__ . '/../view/dashboard.php',
     '/forum' => require_once __DIR__ . '/../view/forum.php'
};

