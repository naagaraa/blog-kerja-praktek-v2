<?php
defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Apps\Core\Bootstraping\Controller;


class AboutController extends Controller
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
		$this->view('blog/pages/about_view');
		$this->view('blog/shared/footer_view');
	}

	public function send()
	{
		// buat zona time indonesia
		date_default_timezone_set('Asia/Jakarta');

		if (
			$_POST['message'] != '' && $_POST['name'] != ''
			&& $_POST['company'] != '' && $_POST['email'] != ''
			&& $_POST['mobile'] != '' && $_POST['perihal'] != ''
		) {
			$data = [
				'message' => htmlspecialchars($_POST['message']),
				'name' => htmlspecialchars($_POST['name']),
				'email' => htmlspecialchars($_POST['email']),
				'mobile' => htmlspecialchars($_POST['mobile']),
				'perihal' => htmlspecialchars($_POST['perihal']),
				'company' => htmlspecialchars($_POST['company']),
				'tanggal' => date('Y-m-d H:i:s', time())
			];

			$this->model('Contact_model')->insertContact($data);

			header('Location:' . BASEURL . 'about');
		} else {
			echo "
			<script>
				alert('Data masih kurang');
				window.location.href = '". BASEURL ."about';
			</script>";
			header('Location:' . BASEURL . 'about');
		}
	}
}