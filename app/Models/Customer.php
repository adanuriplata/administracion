<?php 
namespace App\Models;

use CodeIgniter\Model;

class Customer extends Model{
    protected $table      = 'customers';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_customer';
    protected $allowedFields= ['company', 'owner', 'email', 'phone'];
}