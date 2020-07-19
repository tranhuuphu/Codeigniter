<?php namespace App\Controllers;

use CodeIgniter\Controller;

class SiteHomeController extends Controller
{
	public function index()
	{
		return view('site/home');
	}

	//--------------------------------------------------------------------

}