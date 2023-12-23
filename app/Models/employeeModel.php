<?php

namespace App\Models;
use CodeIgniter\Model;

class employeeModel extends Model{
     protected $table='employees';
     protected $primaryKey='id';
     protected $allowedFields=['name','email','phone','address','joining_date'];

}





?>