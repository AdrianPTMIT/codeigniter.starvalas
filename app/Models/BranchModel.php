<?php

namespace App\Models;
use CodeIgniter\Model;

class BranchModel extends Model
{
    protected $table = 'branch';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = true;
    protected $protectFields = true;
    protected $allowedFields = [name, address, city, openweek, openhour, phoneno, img];
}

