<?php

namespace App\Http\Controllers\Admin;
use Source\View\View;

class DashboardController
{
    public function index()
    {
        View::Load("admin/index"); 
    }
}