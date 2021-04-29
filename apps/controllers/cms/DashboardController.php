<?php
defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Apps\Core\Bootstraping\Controller;

class DashboardController extends Controller
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

		$visitor = $this->model('Visitor_model')->getAllRowVisitor();
		$visit_views = $this->model('Visitor_model')->getAllInfoVisitor();

		$n_views = 0;
		for ($i = 0; $i <= $visitor - 1; $i++) {
			$n_views += $visit_views[$i]['visit_views'];
		}

		$data = [
			'judul' =>  'Dashboard',
			'views' =>  $n_views,
			'totalResource' => $visitor,
			'artikel' => $visit_views,
		];

		$this->view("admin/index_view", $data);
		$this->view("admin/shared/header_view");
		$this->view("admin/pages/dashboard_view", $data);
		$this->view("admin/shared/footer_view");
	}

	public function show($request)
	{
		// code here show here
	}

	public function create()
	{
		// code here create here
	}

	public function update($request)
	{
		// code here update here
	}

	public function remove($request)
	{
		// code here remove here
	}
}