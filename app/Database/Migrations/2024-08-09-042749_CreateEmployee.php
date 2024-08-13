<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEmployee extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                "type" => "INT",
                "unsigned" => true,
                "auto_increment" => true,
            ],
            "nome" => [
                "type" => "CHAR",
            ],
            "cpf" => [
                "type" => "CHAR",
            ],
            "rg" => [
                "type" => "VARCHAR",
            ],
            "nascimento" => [
                "type" => "VARCHAR",
            ],
            "admissao" => [
                "type" => "VARCHAR",
            ],
            "pis" => [
                "type" => "VARCHAR",
            ],
            "cargo" => [
                "type" => "VARCHAR",
            ],
            "cbo" => [
                "type" => "VARCHAR",
            ],
            "estadoCivil" => [
                "type" => "VARCHAR",
            ],
            "email" => [
                "type" => "VARCHAR",
            ],
            "celular" => [
                "type" => "VARCHAR",
            ],
            "salario" => [
                "type" => "VARCHAR",
            ],

        ]);
        $this->forge->addKey("id", true);
        $this->forge->createTable("employees");
    }

    public function down()
    {
        $this->forge->dropTable("employees");
    }
}
