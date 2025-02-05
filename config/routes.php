<?php

return [
    'GET|/' => [App\Controller\HomeController::class, 'renderPage'],
    'GET|/dashboard' => [App\Controller\DashBoardController::class, 'renderPage'],
];