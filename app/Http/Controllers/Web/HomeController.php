<?php

namespace App\Http\Controllers\Web;

use Source\View\View;
use App\Models\Test;

class HomeController
{
    public function index()
    {
        View::load("web/index");
    }
}