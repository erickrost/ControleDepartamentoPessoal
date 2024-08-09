<?php

namespace App\Models;

use CodeIgniter\Database\ResultInterface;
use CodeIgniter\Model;
use stdClass;

/**
 * Base class for People classes
 */
class Employee extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'email',
    ];
}
