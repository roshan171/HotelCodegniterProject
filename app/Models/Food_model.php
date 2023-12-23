<?php

namespace App\Models;

use CodeIgniter\Model;

class Food_model extends Model
{
    protected $table = 'foods';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'description', 'price', 'available'];

    
}
