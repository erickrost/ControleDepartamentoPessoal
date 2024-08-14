<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Employee extends Seeder
{
    public function run()
    {
        $factories = [
            [
                'id' => 1,
                'nome' => 'Erick Rost Santos',
                'cpf' => '12345678910',
                'rg' => '987654321',
                'nascimento' => '10/12/1998',
                'admissao' => '01/01/2020',
                'pis' => '17680046270',
                'cargo' => 'Assistente Contabil',
                'cbo' => '4131-10',
                'estadoCivil' => 'solteiro',
                'email' => 'erickrosts@gmail.com',
                'celular' => '12997577656',
                'salario' => '1900,00',
            ],
            [
                'id' => 2,
                'nome' => 'Joao Vitor Cabral',
                'cpf' => '12345678910',
                'rg' => '987654321',
                'nascimento' => '08/07/1989',
                'admissao' => '01/05/2018',
                'pis' => '17680046270',
                'cargo' => 'Contador',
                'cbo' => '2522-10',
                'estadoCivil' => 'casado',
                'email' => 'joaovitorc@gmail.com',
                'celular' => '12997577656',
                'salario' => '4500,00',
            ],
            [
                'id' => 3,
                'nome' => 'Isabelle Florentino Targino',
                'cpf' => '12345678910',
                'rg' => '987654321',
                'nascimento' => '01/01/2004',
                'admissao' => '15/06/2023',
                'pis' => '17680046270',
                'cargo' => 'Assistente Fiscal',
                'cbo' => '2522-00',
                'estadoCivil' => 'solteiro',
                'email' => 'isabelleflirentinot@gmail.com',
                'celular' => '12997577656',
                'salario' => '2100,00',
            ],
            [
                'id' => 4,
                'nome' => 'Pedro Alvares Cabral',
                'cpf' => '12345678910',
                'rg' => '987654321',
                'nascimento' => '10/03/1467',
                'admissao' => '01/06/2023',
                'pis' => '17680046270',
                'cargo' => 'Estagiário',
                'cbo' => 'Estágio',
                'estadoCivil' => 'solteiro',
                'email' => 'pedrinhoalvares@gmail.com',
                'celular' => '12997577656',
                'salario' => '1200,00',
            ],
            [
                'id' => 5,
                'nome' => 'Silvio Santos',
                'cpf' => '12345678910',
                'rg' => '987654321',
                'nascimento' => '12/12/1930',
                'admissao' => '12/03/2023',
                'pis' => '17680046270',
                'cargo' => 'Auxiliar Contabil',
                'cbo' => '4131-10',
                'estadoCivil' => 'solteiro',
                'email' => 'erickrosts@gmail.com',
                'celular' => '12997577656',
                'salario' => '1600,00',
            ]
        ];

        $builder = $this->db->table('employees');

        foreach ($factories as $factory) {
            $builder->insert($factory);
        }
    }
}
