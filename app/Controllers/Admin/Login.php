<?php
namespace App\Controllers;



use CodeIgniter\Controller;

class Login extends Controller
{
	public function index(){
		return view('admin/login/login');
	}

	public function register(){
		return view('admin/login/register');
	}
}

?>