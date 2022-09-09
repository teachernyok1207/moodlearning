<?php  

namespace App\Models;

use CodeIgniter\Model;

class NewDetails extends Model
{
	protected $table = 'test_crud';
	protected $primaryKey = 'id';
	protected $allowedFields = ['name','email','contact'];
}

?>