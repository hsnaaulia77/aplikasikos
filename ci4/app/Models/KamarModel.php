<?php

namespace App\Models;

use CodeIgniter\Model;

class KamarModel extends Model
{
    protected $table            = 'kamar';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'nama', 'harga', 'ukuran', 'fasilitas', 'deskripsi', 'status', 'created_at', 'updated_at'
    ];
    protected $useTimestamps    = true;
}