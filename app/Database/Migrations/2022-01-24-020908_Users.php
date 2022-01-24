<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'int',
                'constraint'     => '11',
            ],
            'npm'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
            ],
            'status'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '10',
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'            => true,
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null'            => true,
            ]

        ]);
        $this->forge->addPrimaryKey('id', true);
        $this->forge->createTable('data_pemilih');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('data_pemilih');
    }
}
