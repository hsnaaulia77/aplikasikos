<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penyewaan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'              => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'penyewa_id'      => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
            'kamar_id'        => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
            'tanggal_masuk'   => ['type' => 'DATE'],
            'tanggal_keluar'  => ['type' => 'DATE', 'null' => true],
            'foto_bukti'      => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'created_at'      => ['type' => 'DATETIME', 'null' => true],
            'updated_at'      => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('penyewa_id', 'penyewa', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('kamar_id', 'kamar', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('penyewaan');
    }

    public function down()
    {
        $this->forge->dropTable('penyewaan');
    }
} 