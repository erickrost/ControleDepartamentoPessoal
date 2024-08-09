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
                'email' => 'erick.rost@gmail.com'
            ],
            [
                'id' => 2,
                'email' => 'joao.procopio@gmail.com'
            ]
        ];

        $builder = $this->db->table('employees');

        foreach ($factories as $factory) {
            $builder->insert($factory);
        }
    }
}
