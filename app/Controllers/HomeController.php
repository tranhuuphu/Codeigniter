<?php namespace App\Controllers;

	use App\Models\Post_Model;
	use App\Models\Cate_Model;
	use App\Models\Page_Model;
	use CodeIgniter\Model;

class HomeController extends BaseController
{
	public function index()
	{
		$page = new Page_Model;
		$data['page_home'] = $page->where('page_status', 1)->get()->getRow();

		$post = new Post_Model;

		$cate = new Cate_Model;

		$data['featured'] = $post->join('cate', 'cate.cate_id = post.post_cate_id', 'left')->orderBy('post_id', 'DESC')->where('post_featured', 1)->limit(4)->get()->getResultArray();

		$cate_all = $cate->get()->getResultArray();

		foreach($cate_all as $key){
			$post_cate[] = $post->join('cate', 'cate.cate_id = post.post_cate_id', 'left')->orderBy('post_id', 'DESC')->where('post_cate_id', $key['cate_id'])->limit(5)->get()->getResultArray();

		}

		$data['cate_all'] = $cate_all;
		$data['post_cate'] = $post_cate;


		// dd($data['post_cate']);

		// dd($data['featured'] );

		return view('site/home', $data);

	}

	

}