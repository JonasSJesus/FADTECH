<?php

namespace App\Controller;

class DashBoardController
{
    public function renderPage(): void
    {
        require_once __DIR__ . '/../../view/dashboard.php';
    }
}