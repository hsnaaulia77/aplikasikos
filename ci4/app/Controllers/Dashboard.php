<?php

namespace App\Controllers;

use App\Models\KamarModel;
use App\Models\UserModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $kamarModel = new KamarModel();
        $userModel = new UserModel();

        $totalKamar = $kamarModel->countAll();
        $kamarKosong = $kamarModel->where('status', 'kosong')->countAllResults();
        $kamarTerisi = $kamarModel->where('status', 'terisi')->countAllResults();
        $totalUser = $userModel->countAll();

        $data = [
            'user' => session('user_nama'),
            'role' => session('user_role'),
            'totalKamar' => $totalKamar,
            'kamarKosong' => $kamarKosong,
            'kamarTerisi' => $kamarTerisi,
            'totalUser' => $totalUser,
        ];

        return view('dashboard', $data);
    }
} 