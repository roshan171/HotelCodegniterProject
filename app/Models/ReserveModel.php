<?php

namespace App\Models;
use CodeIgniter\Model;

class ReserveModel extends Model{
     protected $table='reservetable';
     protected $primaryKey='id';
     protected $allowedFields=['name','email','phone','date','time','person'];

}





?>