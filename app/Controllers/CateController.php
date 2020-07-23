<?php
	namespace App\Controllers;

	use CodeIgniter\Controller;
	use App\Models\Cate_Model;

	class CateController extends Controller
	{
		protected $helpers = ['text'];

		public function index(){

			$cate = new Cate_Model;

			$data['cate'] = $cate->get()->getResult();
			// $data['cate'] = $cate->where('deleted_at', NULL)->get()->getResult();



			return view('admin/cate/cate', $data);
		}

		public function getAdd(){

			// $db      = \Config\Database::connect();
			// $builder = $db->table('cate');
			// $data['cate']   = $builder->where('parent_cate_id', 0)->get()->getResult();

			$cate = new Cate_Model;

			$data['cate'] = $cate->where('parent_cate_id', 0)->get()->getResult();
			// $data['cate'] = $cate->where('parent_cate_id', 0)->get()->getResult();


			return view('admin/cate/add', $data);
		}

		public function postAdd(){

			$cate = new Cate_Model;

			$validate = $this->validate(
				[
					'cate_name' => 'required',
					'meta_key' => 'required',
					'meta_desc' => 'required',
					// 're_confirm' => 'required|matches[password]',
				],
			);
			if(!$validate){
				$data['validation'] =  \Config\Services::validation();
				return redirect()->to(base_url('admin/cate/add'))->withInput()->with('validate', $data['validation']);
				
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

			$data['session'] = session()->setFlashdata('notice', 'Thêm menu thành công');

			return redirect()-> to(base_url('admin/cate'), $data['session']);

		}

		public function getEdit($id){
			$cate = new Cate_Model;
			// dd($id);
			$data['cate_info'] = $cate->where('cate_id', $id)->get()->getRow();

			$data['cate'] = $cate->where('parent_cate_id', 0)->get()->getResult();

			

			return view('admin/cate/edit', $data);

		}

		public function postEdit($id){

			$cate = new Cate_Model;


			$data['validation'] = $this->validate(
				[
					'cate_name' => 'required',
					'meta_key' => 'required',
					'meta_desc' => 'required',
					// 're_confirm' => 'required|matches[password]',
				],
			);
			if(!$data['validation']){
				$data['validation'] =  \Config\Services::validation();
				return redirect()->to(base_url('admin/cate/edit/'.$id))->withInput()->with('validate', $data['validation']);
				
			}

			$title = $this->request->getPost('cate_name');
			$title_slug = url_title(convert_accented_characters($title), '-', true);

			$data = array(

				'cate_name' => $title,
				'cate_slug' => $title_slug,
				'parent_cate_id' => $this->request->getPost('parent_cate_id'),
				'meta_key' => $this->request->getPost('meta_key'),
				'meta_desc' => $this->request->getPost('meta_desc'),
				
			);
	        
			// dd($data);
			$cate->update($id, $data);

			$data['session'] = session()->setFlashdata('notice', 'Chỉnh sửa menu thành công');

			return redirect()-> to(base_url('admin/cate'), $data['session']);

		}

		public function delete($id){
			$cate = new Cate_Model;


			if($cate->where('cate_id', $id)->delete()){

				$cate->where('cate_id', $id)->purgeDeleted();

				$data['session'] = session()->setFlashdata('notice', 'Xóa menu thành công');
				return redirect()-> to(base_url('admin/cate'), $data['session']);
			}

			$data['session'] = session()->setFlashdata('notice', 'Có lỗi menu thành công');

			return redirect()-> to(base_url('admin/cate'), $data['session']);


			
		}

		
	}

?>