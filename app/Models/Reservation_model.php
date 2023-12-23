<?php
 
namespace App\Models;

use CodeIgniter\Model;

class Reservation_model extends Model
{
    protected $table = 'reservations';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'status', 'payment_mode','available'];

    // Additional model methods as needed
}
