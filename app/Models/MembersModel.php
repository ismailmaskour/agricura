<?php

namespace App\Models;

use CodeIgniter\Model;

class MembersModel extends Model{
    
    protected $table      = 'subscribers';
    protected $primaryKey = 'id';
    protected $allowedFields = [];

}
