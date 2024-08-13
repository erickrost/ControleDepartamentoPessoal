<?php

namespace App\Models;

use CodeIgniter\Model;

/**
 * Base class for People classes
 */
class Employee extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'nome',
        'cpf',
        'rg',
        'nascimento',
        'admissao',
        'pis',
        'cargo',
        'cbo',
        'estadoCivil',
        'email',
        'celular',
        'salario',
    ];

}
