<?php
	namespace App\Controllers;

	use CodeIgniter\Controller;
	use App\Models\Cate_Model;

	class CateController extends Controller
	{
		protected $helpers = ['text'];

		public function index(){
			return view('admin/cate/cate');
		}

		public function getAdd(){

			$db      = \Config\Database::connect();
			$builder = $db->table('cate');
			$data['cate']   = $builder->where('parent_cate_id', 0)->get()->getResult();

			echo view('admin/cate/add', $data);
		}

		public function postAdd(){

			$cate = new Cate_Model;

			$validate = $this->validate(
				[
					'cate_name' => 'required',
					'meta_key' => 'required|is_unique[users.email]',
					'meta_desc' => 'required',
					// 're_confirm' => 'required|matches[password]',
				],
			);
			if(!$validate){
				$validation =  \Config\Services::validation();
				return redirect()->to(base_url('admin/cate/add'))->withInput()->with('validate', $validation);
				
			}

			$title = $this->request->getPost('cate_name');
			$title_slug = url_title(convert_accented_characters($title), '-', true);

			$data = array(

				'cate_name' => $this->request->getPost('cate_name'),
				'cate_slug' => $title_slug,
				'parent_cate_id' => $this->request->getPost('parent_cate_id'),
				'meta_key' => $this->request->getPost('meta_key'),
				'meta_desc' => $this->request->getPost('meta_desc'),
				

				
			);
	        

			// dd($data);

			$cate->insert($data);



	        

			$session = session()->setFlashdata('notice', 'Thêm menu thành công');

			return redirect()-> to(base_url('admin/cate'), $session);

		}

		
	}

?>