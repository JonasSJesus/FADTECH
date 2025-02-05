<?php

namespace App\Controller;

class HomeController
{
    public function renderPage(): void
    {
        require_once __DIR__ . '/../../view/home.php';
    }
}