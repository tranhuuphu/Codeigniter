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

		$cate_detail = $cate->where('cate_slug', $slug)->get()->getRow();


		if(!$cate_detail || $cate_detail == null){
            return view('errors/404');
        }
        

		$cate_id = $cate_detail->cate_id;
		$cate_slug = $cate_detail->cate_slug;
		$cate_title = $cate_detail->cate_name;
		// dd($cate_slug);
        $cate_parent = $cate_detail->parent_cate_id;

        if($cate_parent == 0){
            $cate_sub_id = $cate->where('parent_cate_id', $cate_id)->get()->getResultArray();
            if($cate_sub_id != null){
                foreach($cate_sub_id as $c_s){
                    $cate_sub_array[] = $c_s['cate_id'];
                }
                $post_cate = $post->whereIn('post_cate_id', $cate_sub_array)->orderBy('post_id', 'desc')->paginate(11);
            }else{
                $post_cate = $post->where('post_cate_id', $cate_id)->orderBy('post_id', 'desc')->paginate(11);
            }
        }else{
            $post_cate = $post->where('post_cate_id', $cate_id)->orderBy('post_id', 'desc')->paginate(11);
            
        }
        // dd($post_cate);
        // $data['post_cate'] = $post_cate;
        // $data['cate_detail'] = $cate_detail;
        $data['cate_slug'] = $cate_slug;
        $data = [
            'post_cate'     	=> $post_cate,
            'cate_detail'     	=> $cate_detail,
            'pager'     		=> $post->pager,
        ];

		return view('site/post_cate', $data);
	}
	public function getDetailPost($cate_slug, $slug){
		
		$post = new Post_Model;
		$cate = new Cate_Model;

		$array = explode('-', $slug);
		$post_id = array_pop($array);

		// dd($array);

		$slug2 = implode('-', $array);

		// dd($slug2);
		

		

		$post_info = $post->where('post_id', $post_id)->get()->getRow();

		$cate_id = $post_info->post_cate_id;

		$cate_detail = $cate->where('cate_id', $cate_id)->get()->getRow();

		if($cate_detail == null && !isset($cate_id)){
			return redirect()->to(base_url().'/uncategory/'.$post_info->post_slug.'-'.$post_info->post_id.'.html');
		}
		// dd($post_info->post_slug != $slug);
		if($cate_detail->cate_slug != $cate_slug || $post_info->post_slug != $slug2){
			return redirect()->to(base_url('').'/'.$cate_detail->cate_slug.'/'.$post_info->post_slug.'-'.$post_info->post_id.'.html');
		}

		$data['related'] = $post->join('cate', 'cate.cate_id = post.post_cate_id', 'left')->orderBy('post_id', 'DESC')->groupStart()->where('post_cate_id', $cate_id)->where('post_id !=', $post_id)->groupEnd()->limit(6)->get()->getResultArray();
		

		$data['cate_detail'] = $cate_detail;
		$data['post_info'] = $post_info;


		return view('site/post_detail', $data);

		
	}
	public function tags($tags){

		$post = new Post_Model;
		$tags_array = explode('-', $tags);
		$tags_origin = implode(' ', $tags_array);

		$post_tag = $post->join('cate', 'cate.cate_id = post.post_cate_id', 'left')->orderBy('post_id', 'DESC')->like('post_tag', $tags_origin)->paginate(10);



		// dd($post_tag);
		
	}

	

}