<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEmployee extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                "id" => [
                    "type" => "INT",
                    "unsigned" => true,
                    "auto_increment" => true,
                ],
                "nome" => [
                    "type" => "VARCHAR",
                    "length" => 255,
                ],
                "cpf" => [
                    "type" => "CHAR",
                    "length" => 11,
                ],
                "rg" => [
                    "type" => "VARCHAR",
                    "length" => 20,
                ],
                "nascimento" => [
                    "type" => "DATE",
                ],
                "admissao" => [
                    "type" => "DATE",
                ],
                "pis" => [
                    "type" => "VARCHAR",
                    "length" => 11,
                ],
                "cargo" => [
                    "type" => "VARCHAR",
                    "length" => 100,
                ],
                "cbo" => [
                    "type" => "VARCHAR",
                    "length" => 20,
                ],
                "estadoCivil" => [
                    "type" => "VARCHAR",
                    "length" => 20,
                ],
                "email" => [
                    "type" => "VARCHAR",
                    "length" => 255,
                ],
                "celular" => [
                    "type" => "VARCHAR",
                    "length" => 20,
                ],
                "salario" => [
                    "type" => "DECIMAL",
                    "length" => "10,2",
                ],
            ]
        );
        $this->forge->addKey("id", true);
        $this->forge->createTable("employees");
    }

    public function down()
    {
        $this->forge->dropTable("employees");
    }
}
