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
					// 're_confirm' => 'required|matches[password]',
				],
			);
			if(!$validate){
				$validation =  \Config\Services::validation();
				return redirect()->to(base_url('admin/register'))->withInput()->with('validate', $validation);
			}
			$data = array(
				'name' => $this->request->getPost('name'),
				'email' => $this->request->getPost('email'),
				'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
				// 'level' = $this->request->getPost('level'),
			);
			// dd($data);
			

			$user = new User;
			$user->insert($data);
			$session = session()->setFlashdata('notice', 'Tạo mới tài khoản thành công');
			return redirect()-> to(base_url('admin/login'), $session);
		}

		public function login(){
			$userModel = new AuthModel;
			$table = 'users';
			$email = $this->request->getPost('email');
			// $password = password_hash($this->request->getPost('password'), PASSWORD_BCRYPT);
			$password = $this->request->getPost('password');
			$rowId = $userModel->get_data_login($email, $table);
			// dd($password);
			if($rowId == null){
				session()->setFlashdata('notice', 'Email hoặc Password không đúng');
				return redirect()->to(base_url('admin/login'));
			}
			if(password_verify($password, $rowId->password))
			{
				$data = array(
					'log' => TRUE,
					'name' => $rowId->name,
					'email' => $rowId->email,
					'id' => $rowId->id,


				);
				session()->set($data);
				session()->setFlashdata('notice', 'Đăng nhập thành công');
				return redirect()->to(base_url('admin/dashboard'));
			}
			session()->setFlashdata('notice', 'Password không đúng');
			return redirect()->to(base_url('admin/login'));
		}

		public function logout(){
			$session = session();
			$session->destroy();
			session()->setFlashdata('notice', 'Bạn đã đăng xuất');
			return redirect()->to(base_url('admin/login'));

		}

	}

?>