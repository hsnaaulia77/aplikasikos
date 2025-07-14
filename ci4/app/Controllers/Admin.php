<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        // Anda bisa redirect ke dashboard admin, atau tampilkan menu admin
        return view('dashboard_admin');
    }
} 