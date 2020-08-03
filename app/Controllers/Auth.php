<?php
	namespace App\Controllers;



	use CodeIgniter\Controller;
	use App\Models\User;
	use App\Models\Auth_Model;

	class Auth extends Controller
	{
		// public function index(){
		// 	return view('admin/login/login');
		// }
		public function __construct() {
	        $this->auth = new Auth_Model;
	    }

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
			$userModel = new Auth_Model;
			$table = 'users';
			$email = $this->request->getPost('email');
			$password = $this->request->getPost('password');
			$rowId = $userModel->get_data_login($email, $table);
			// dd($password);


			if($rowId == null){
				session()->setFlashdata('notice', 'Email hoặc Password không đúng');
				return redirect()->to(base_url('auth/login'));
			}
			if(password_verify($password, $rowId->password))
			{
				session()->set("id", $rowId->id);
	            session()->set("name", $rowId->name);
	            session()->set("email", $rowId->email);
	            session()->set("password", $rowId->password);
	 
	            return redirect()->to(base_url('admin/'));

				session()->setFlashdata('notice', 'Đăng nhập thành công');
				return redirect()->to(base_url('admin/dashboard'));
			}else{
	         	session()->setFlashdata('notice', 'Password không đúng');
	            return redirect()->to(base_url('auth/login'));
	        }

			

		}


		public function logout()
	    {
	        session()->destroy();
	        return redirect()->to(base_url('auth/login'));
	    }

	}

?>