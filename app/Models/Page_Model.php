<?php
	namespace App\models;
	use CodeIgniter\model;

	class Page_Model extends Model{

		protected $DBGroup = 'default';
		
		protected $table = 'page';

		protected $primaryKey = 'page_id';

	    protected $returnType     = 'array';
	    protected $useSoftDeletes = true;

	    protected $allowedFields = ['page_title', 'page_slug', 'page_image', 'page_status', 'page_content', 'meta_key', 'meta_desc'];

	    // protected $allowedFields = [];

	    protected $useTimestamps = true;
	    protected $createdField  = 'created_at';
	    protected $updatedField  = 'updated_at';
	    protected $deletedField  = 'deleted_at';
	}
?>