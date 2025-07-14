<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePenyewaTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'              => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'nama'            => ['type' => 'VARCHAR', 'constraint' => 100],
            'no_ktp'          => ['type' => 'VARCHAR', 'constraint' => 30],
            'no_hp'           => ['type' => 'VARCHAR', 'constraint' => 20],
            'kamar_id'        => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
            'tanggal_masuk'   => ['type' => 'DATE'],
            'tanggal_keluar'  => ['type' => 'DATE', 'null' => true],
            'foto_ktp'        => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'created_at'      => ['type' => 'DATETIME', 'null' => true],
            'updated_at'      => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('kamar_id', 'kamar', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('penyewa');
    }

    public function down()
    {
        $this->forge->dropTable('penyewa');
    }
} 