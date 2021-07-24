<?php

namespace App\Http\Controllers;

use Source\View\View;
use App\Models\Test;

class HomeController
{
    public function index()
    {
        View::load("web/index");
    }
}