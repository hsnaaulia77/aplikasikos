<?php

namespace App\Models;

use CodeIgniter\Model;

class KamarFotoModel extends Model
{
    protected $table            = 'foto_kamar'; // atau 'kamar_foto' jika nama tabel di migration
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'kamar_id', 'foto', 'created_at', 'updated_at'
    ];
    protected $useTimestamps    = true;
} 