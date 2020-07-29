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

		$cate_all = $cate->where('parent_cate_id', 0)->get()->getResultArray();
		$cate_2 = $cate->get()->getResultArray();

		foreach($cate_all as $key){
			$id = $key['cate_id'];
			foreach($cate_2 as $row){
				if($row['parent_cate_id'] == $id){
					// $sub_id = array();
					$sub_id[] = $row['cate_id'];
				}
			}
			// dd($sub_id);
			if(isset($sub_id) && $sub_id != NULL){
				$post_cate[] = $post->join('cate', 'cate.cate_id = post.post_cate_id', 'left')->orderBy('post_id', 'DESC')->whereIn('post_cate_id', $sub_id)->limit(5)->get()->getResultArray();
				unset($sub_id);
			}else{
				$post_cate[] = $post->join('cate', 'cate.cate_id = post.post_cate_id', 'left')->orderBy('post_id', 'DESC')->where('post_cate_id', $key['cate_id'])->limit(5)->get()->getResultArray();
			}
			// dd($post_cate);

			


		}
		// dd($post_cate);

		$data['cate_all'] = $cate_all;
		$data['post_cate'] = $post_cate;


		// dd($data['post_cate']);

		// dd($data['featured'] );

		return view('site/home', $data);

	}

	public function catePost($slug){
		$post = new Post_Model;

		$cate = new Cate_Model;

		$cate_info = $cate->where('cate_slug', $slug)->get()->getRow();
		// var_dump($cate_info);
		$id_sub = $cate_info->cate_id;
		if($cate_info->parent_cate_id == 0){
			$cate_sub = $cate->where('parent_cate_id', $id_sub)->get()->getResultArray();
		}
		dd($cate_sub);
		// dd(count($cate_sub));
		if(count($cate_sub) == 0){
			// dd(1);
		}else{
			// dd(2);
		}

		return view('site/post_cate');
	}

	

}