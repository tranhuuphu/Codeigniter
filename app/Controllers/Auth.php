<?php
	namespace App\Controllers;



	use CodeIgniter\Controller;
	use App\Models\User;
	use App\Models\AuthModel;

	class Auth extends Controller
	{
		// public function index(){
		// 	return view('admin/login/login');
		// }

		public function register(){
			$validate = $this->validate(
				[
					'name' => 'required',
					'email' => 'required|is_unique[users.email]',
					'password' => 'required',
					're_confirm' => 'required|matches[password]',
				],
			);
			if(!$validate){
				$validation =  \Config\Services::validation();
				return redirect()->to(base_url('admin/register'))->withInput()->with('validate', $validation);
			}
			$data = array(
				'name' => $this->request->getPost('name'),
				'email' => $this->request->getPost('email'),
				'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
				// 'level' = $this->request->getPost('level'),
			);

			$user = new User;
			$user->insert($data);
			$session = session()->setFlashdata('notice', 'Đăng ký thành công');
			return redirect()-> to(base_url('admin/login'), $session);
		}

		public function login(){
			$userModel = new AuthModel;
			$table = 'users';
			$email = $this->request->getPost('email');
			$password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
			$rowId = $userModel->get_data_login($email, $table);
			// dd($rowId);
			if($rowId == null){
				session()->setFlashdata('notice', 'Email hoặc Password không đúng');
				return redirect()->to(base_url('admin/login'));
			}
		}

	}

?>