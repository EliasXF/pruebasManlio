<?php namespace App\Models;
use CodeIgniter\Model;

class Model_usuario extends Model {


    var  $db1;
	function __construct()
	{
		$db1 = \Config\Database::connect('default');
		$this->db1 = $db1;
	}


    public function getUser($data){
        $Usuario=$this->db1->table('usuarios');
        $Usuario->where($data);
        return $Usuario->get()->getResultArray();
        

    }
    
}