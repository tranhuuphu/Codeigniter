<?php
	namespace App\Controllers;

	use CodeIgniter\Controller;
	use App\Models\Post_Model;

	class PostController extends Controller
	{
		protected $helpers = ['text'];

		public function index(){
			return view('admin/post/post');
		}

		public function getAdd(){

			return view('admin/post/addPost');
		}

		public function postAdd(){

			$post = new Post_Model;

			$title = $this->request->getPost('title');
			$title_slug = url_title(convert_accented_characters($title), '-', true);

			$data = array(

				'post_cate_id' => $this->request->getPost('cate'),
				'post_title' => $this->request->getPost('title'),
				'post_slug' => $title_slug,
				'post_intro' => $this->request->getPost('intro'),
				'post_featured'=> $this->request->getPost('featured'),
				'post_content' => $this->request->getPost('content'),
				'post_view' => 0,
				'meta_key' => $this->request->getPost('meta_key'),
				'meta_desc' => $this->request->getPost('meta_desc'),
				

				
			);

			$img = $this->request->getFile('image');
			$ext = $img->getClientExtension();
	        $img_name = $title_slug.'-'.time().'.'.$ext;


	        $data['post_image'] = $img_name;


	        

			// dd($img_name);

			$post->insert($data);

			if($img = $this->request->getFile('image'))
	        {
	            if ($img->isValid() && ! $img->hasMoved())
	            {
	            	

	                $img->move('public/upload/post/', $img_name);

	            }
	        }


	        

			$session = session()->setFlashdata('notice', 'Thêm bài viết thành công');

			return redirect()-> to(base_url('admin/post'), $session);

		}

		
	}

?>