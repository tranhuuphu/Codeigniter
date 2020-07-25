<?php
	namespace App\Controllers;

	use CodeIgniter\Controller;
	use App\Models\Post_Model;
	use App\Models\Cate_Model;


	class PostController extends Controller
	{
		protected $helpers = ['text'];

		public function index(){
			$post = new Post_Model;
			$data['post'] = $post->get()->getResult();
			return view('admin/post/post', $data);
		}

		public function getAdd(){

			$cate = new Cate_Model;

			$data['cate'] = $cate->get()->getResultArray();

			// dd($data);

			return view('admin/post/add', $data);
		}

		public function postAdd(){

			\Tinify\setKey("Gm9tcZRV75DrltRlPtRbv5SZPj5XtBP8");

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


			// dd($data);

			$post->insert($data);

			if($img)
	        {
	            if ($img->isValid() && ! $img->hasMoved())
	            {
	                $img->move('public/upload/post/', $img_name);
	                $source = \Tinify\fromFile("public/upload/post/".$img_name);
					$source->toFile("public/upload/post/".$img_name);
	            }
	        }


			$data['session'] = session()->setFlashdata('notice', 'Thêm bài viết thành công');

			return redirect()-> to(base_url('admin/post'), $data['session']);

		}

		public function getEdit($id){
			
			$cate = new Cate_Model;

			$data['cate'] = $cate->get()->getResultArray();

			$post = new Post_Model;

			$data['post_info'] = $post->where('post_id', $id)->get()->getRow();

			// dd($data);

			return view('admin/post/edit', $data);
		}

		public function postEdit($id){

			\Tinify\setKey("Gm9tcZRV75DrltRlPtRbv5SZPj5XtBP8");

			$post = new Post_Model;

			$post_info = $post->where('post_id', $id)->get()->getRow();

			$title = $this->request->getPost('title');
			$title_slug = url_title(convert_accented_characters($title), '-', true);

			$data = array(
				'post_cate_id' => $this->request->getPost('cate'),
				'post_title' => $this->request->getPost('title'),
				'post_slug' => $title_slug,
				'post_intro' => $this->request->getPost('intro'),
				'post_featured'=> $this->request->getPost('featured'),
				'post_content' => $this->request->getPost('content'),
				'meta_key' => $this->request->getPost('meta_key'),
				'meta_desc' => $this->request->getPost('meta_desc'),
			);

			$img = $this->request->getFile('image');

			if($img){
				$ext = $img->getClientExtension();
		        $img_name = $title_slug.'-'.time().'.'.$ext;


		        $data['post_image'] = $img_name;

		        if(is_file('public/upload/post/'.$post_info->post_image) && file_exists('public/upload/post/'.$post_info->post_image)){
		        	unlink('public/upload/post/'.$post_info->post_image);
	        		
	        	}
			}else{
        		$data['post_image'] = $post_info->post_image;
        	}
			
			$data['post_view'] = $post_info->post_view;


			// dd($data);

			$post->update($id, $data);

			if($img)
	        {
	            if ($img->isValid() && ! $img->hasMoved())
	            {
	            	

	                $img->move('public/upload/post/', $img_name);

	                $source = \Tinify\fromFile("public/upload/post/".$img_name);
					$source->toFile("public/upload/post/".$img_name);

	            }
	        }

	       

			$data['session'] = session()->setFlashdata('notice', 'Thêm bài viết thành công');

			return redirect()-> to(base_url('admin/post'), $data['session']);
		}

		
	}

?>