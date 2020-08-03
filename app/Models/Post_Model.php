<?php
	namespace App\models;
	use CodeIgniter\model;

	class Post_Model extends Model{

		protected $DBGroup = 'default';
		
		protected $table = 'post';

		protected $primaryKey = 'post_id';

	    protected $returnType     = 'array';
	    protected $useSoftDeletes = true;

	    protected $allowedFields = ['post_cate_id', 'post_title', 'post_slug', 'post_image', 'post_intro', 'post_featured', 'post_content', 'post_tag', 'post_tag_json', 'post_view', 'meta_key', 'meta_desc', 'deleted_at'];

	    // protected $allowedFields = [];

	    protected $useTimestamps = true;
	    protected $createdField  = 'created_at';
	    protected $updatedField  = 'updated_at';
	    protected $deletedField  = 'deleted_at';
	}
?>