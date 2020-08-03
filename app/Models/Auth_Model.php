<?php
	namespace App\models;
	use CodeIgniter\model;

	class Auth_Model extends Model{

		protected $table = 'users';

		protected $primaryKey = 'id';


		protected $returnType     = 'array';
	    protected $useSoftDeletes = true;

	    protected $allowedFields = ['name', 'email', 'password', 'email_verified_at'];

	    protected $useTimestamps = true;
	    protected $createdField  = 'created_at';
	    protected $updatedField  = 'updated_at';
	    protected $deletedField  = 'deleted_at';


		public function getLogin($email, $password)
	    {
	        return $this->db->table($this->table)->where(['email' => $email])->get()->getRowArray();
	    }


		function get_data_login($email, $tbl){
			$builder = $this->db->table($tbl);
			$builder->where('email', $email);
			$log = $builder->get()->getRow();
			return $log;
		}
	}
?>