<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEmployee extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => "128",
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable("employees");
    }

    public function down()
    {
        $this->forge->dropTable("employees");
    }
}
