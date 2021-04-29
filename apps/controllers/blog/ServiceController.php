<?php
defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Apps\Core\Bootstraping\Controller;


class ServiceController extends Controller
{

	public function __construct()
	{
		// code here
	}

	public function index()
	{
		$data['title'] = 'About';

		$this->view('blog/index_view', $data);
		$this->view('blog/shared/header_view');
		$this->view('blog/pages/service_view');
		$this->view('blog/shared/footer_view');
	}
}