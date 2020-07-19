<?php
	namespace App\models;
	use CodeIgniter\model;

	class User extends Model{
		protected $table      = 'users';
	    protected $primaryKey = 'id';

	    protected $returnType     = 'array';
	    protected $useSoftDeletes = true;

	    protected $allowedFields = ['name', 'email', 'password'];

	    protected $useTimestamps = true;
	    protected $createdField  = 'created_at';
	    protected $updatedField  = 'updated_at';
	    protected $deletedField  = 'deleted_at';

	    // protected $validationRules    = [];
	    // protected $validationMessages = [];
	    // protected $skipValidation     = false;
	}
?>