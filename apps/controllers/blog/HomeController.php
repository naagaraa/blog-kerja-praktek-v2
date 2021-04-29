<?php
defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Apps\Core\Bootstraping\Controller;


class HomeController extends Controller
{

	public function __construct()
	{
		// $spreadsheet = new Spreadsheet();
		// $sheet = $spreadsheet->getActiveSheet();
	}

	public function index()
	{
		$data['title'] = 'Home';

		$this->view('blog/index_view', $data);
		$this->view('blog/shared/header_view');
		$this->view('blog/pages/home_view');
		$this->view('blog/shared/footer_view');
	}
}