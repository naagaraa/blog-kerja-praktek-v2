<?php
defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Apps\Core\Bootstraping\Controller;

class Welcome extends Controller
{

	public function __construct()
	{
	}

	public function index()
	{
		// $url = $this->lib('Url');
		// $Route = new Route;
		// $spreadsheet = new Spreadsheet();
		// $sheet = $spreadsheet->getActiveSheet();

		# jika tidak ingin mengarah kepada controller welcome bisa dengan menghapus controller
		// $url->Redirect(BASEURL . '/home');
		// $url->Redirect(BASEURL . '/home');
		// $this->view('Welcome');
		// $Route->router('about');
	}

	public function show()
	{
		phpinfo();
	}
}