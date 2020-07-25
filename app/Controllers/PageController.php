<?php
	namespace App\Controllers;

	use CodeIgniter\Controller;
	use App\Models\Page_Model;


	class PageController extends Controller
	{
		protected $helpers = ['text'];

		public function index(){
			$page = new Page_Model;
			$data['page_info'] = $page->get()->getResult();
			return view('admin/page/page', $data);
		}

		public function getAdd(){

			$page = new Page_Model;

			$data['page_info'] = $page->where('page_status', 1)->get()->getRow();

			// dd($data);

			return view('admin/page/add', $data);
		}

		public function postAdd(){

			\Tinify\setKey("Gm9tcZRV75DrltRlPtRbv5SZPj5XtBP8");

			$page = new Page_Model;

			$title = $this->request->getPost('title');
			$title_slug = url_title(convert_accented_characters($title), '-', true);

			$data = array(
				'page_title' => $this->request->getPost('title'),
				'page_slug' => $title_slug,
				'page_status'=> $this->request->getPost('status'),
				'page_content' => $this->request->getPost('content'),
				'meta_key' => $this->request->getPost('meta_key'),
				'meta_desc' => $this->request->getPost('meta_desc'),
			);

			$img = $this->request->getFile('image');
			$ext = $img->getClientExtension();
	        $img_name = $title_slug.'-'.time().'.'.$ext;


	        $data['page_image'] = $img_name;


			// dd($data);

			$page->insert($data);

			if($img)
	        {
	            if ($img->isValid() && ! $img->hasMoved())
	            {
	                $img->move('public/upload/page/', $img_name);
	                $source = \Tinify\fromFile("public/upload/page/".$img_name);
					$source->toFile("public/upload/page/".$img_name);
	            }
	        }


			$data['session'] = session()->setFlashdata('notice', 'Thêm bài viết thành công');

			return redirect()-> to(base_url('admin/page'), $data['session']);

		}

		public function getEdit($id){

			$page = new Page_Model;

			$data['page_info'] = $page->where('page_id', $id)->get()->getRow();

			$data['home_page'] = $page->where('page_status', 1)->get()->getRow();

			// dd($data);

			return view('admin/page/edit', $data);
		}

		public function postEdit($id){

			\Tinify\setKey("Gm9tcZRV75DrltRlPtRbv5SZPj5XtBP8");

			$page = new Page_Model;

			$page_info = $page->where('page_id', $id)->get()->getRow();

			$title = $this->request->getPost('title');
			$title_slug = url_title(convert_accented_characters($title), '-', true);

			$data = array(
				'page_title' => $this->request->getPost('title'),
				'page_slug' => $title_slug,
				'page_status'=> $this->request->getPost('status'),
				'page_content' => $this->request->getPost('content'),
				'meta_key' => $this->request->getPost('meta_key'),
				'meta_desc' => $this->request->getPost('meta_desc'),
			);

			$img = $this->request->getFile('image');

			if($img){
				$ext = $img->getClientExtension();
		        $img_name = $title_slug.'-'.time().'.'.$ext;


		        $data['page_image'] = $img_name;

		        if(is_file('public/upload/page/'.$page_info->page_image) && file_exists('public/upload/page/'.$page_info->page_image)){
		        	unlink('public/upload/page/'.$page_info->page_image);
	        		
	        	}
			}else{
        		$data['page_image'] = $page_info->page_image;
        	}
			


			// dd($data);

			$page->update($id, $data);

			if($img)
	        {
	            if ($img->isValid() && ! $img->hasMoved())
	            {
	            	

	                $img->move('public/upload/page/', $img_name);

	                $source = \Tinify\fromFile("public/upload/page/".$img_name);
					$source->toFile("public/upload/page/".$img_name);

	            }
	        }

	       

			$data['session'] = session()->setFlashdata('notice', 'Thêm bài viết thành công');

			return redirect()-> to(base_url('admin/page'), $data['session']);
		}

		
	}

?>