<?php
defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Apps\Core\Bootstraping\Controller;

class ChardController extends Controller
{
	public function __construct()
	{
		// constructor here
		session_start();

	}
	public function index()
	{
		// code index here
		if (!isset($_SESSION['login'])) {
			header('Location:' . BASEURL . 'login');
			exit;
		}

		$data = [
			'judul' => "Example view",
			'content' => "this is content"
		];

		$this->view("admin/index_view", $data);
		$this->view("admin/shared/header_view");
		$this->view("admin/pages/dashboard_view");
		$this->view("admin/shared/footer_view");
	}
}