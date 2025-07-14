<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKamarTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'nama'       => ['type' => 'VARCHAR', 'constraint' => 100],
            'harga'      => ['type' => 'INT', 'constraint' => 11],
            'ukuran'     => ['type' => 'VARCHAR', 'constraint' => 20],
            'fasilitas'  => ['type' => 'TEXT', 'null' => true], // Simpan JSON/serialize
            'deskripsi'  => ['type' => 'TEXT', 'null' => true],
            'status'     => ['type' => 'ENUM', 'constraint' => ['kosong', 'terisi', 'dibooking'], 'default' => 'kosong'],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('kamar');
    }

    public function down()
    {
        $this->forge->dropTable('kamar');
    }
} 