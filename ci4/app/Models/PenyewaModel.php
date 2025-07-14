<?php

namespace App\Models;

use CodeIgniter\Model;

class PenyewaModel extends Model
{
    protected $table = 'penyewa';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama', 'no_ktp', 'no_hp', 'kamar_id', 'tanggal_masuk', 'tanggal_keluar', 'foto_ktp'
    ];
    protected $useTimestamps = true;
}