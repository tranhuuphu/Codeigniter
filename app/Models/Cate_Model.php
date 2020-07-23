<?php
	namespace App\models;
	use CodeIgniter\model;

	class Cate_Model extends Model{
		
		protected $table = 'cate';

		protected $primaryKey = 'cate_id';

	    protected $returnType     = 'array';
	    protected $useSoftDeletes = true;

	    protected $allowedFields = ['cate_name', 'cate_slug', 'parent_cate_id', 'meta_key', 'meta_desc'];

	    // protected $allowedFields = [];

	    protected $useTimestamps = true;
	    protected $createdField  = 'created_at';
	    protected $updatedField  = 'updated_at';
	    protected $deletedField  = 'deleted_at';


	}

	
?>