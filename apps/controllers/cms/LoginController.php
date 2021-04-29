<?php
defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Apps\Core\Bootstraping\Controller;


class LoginController extends Controller
{
	public function __construct()
	{
		session_start();
	}

	public function index()
	{
		// init user info
		// $this->lib('info')->getinfo();

		if (isset($_SESSION['login'])) {
			header('Location:' . BASEURL . 'dashboard');
			exit;
		}

		$data['judul'] = 'Login page';

		$this->view("admin/index_view", $data);
		$this->view("admin/pages/login_view");
	}

	public function auth()
	{
		// Auth handle with ajax public js/cms/auth.js
		$username = htmlspecialchars($_POST['username']);
		$password = md5(htmlspecialchars($_POST['password']));

		if ($username == "") {
			$message = [
				"success" => false,
				"message" => 'Username field is required!',
			];
		} else if ($password == "") {
			$message = [
				"success" => false,
				"message" => 'Password field is required!'
			];
		} else {
			$data = $this->model('User_model')->getUser($username, $password);		 // check user login
			if ($username == $data['user_name'] && $password == $data['passw']) {
				if ($data['status'] == 1) {
					// cek login
					$_SESSION['login'] = TRUE;
					$_SESSION['username'] = $username;
					$_SESSION['id'] = $data['id'];
					$_SESSION['level'] = $data['level'];
					$_SESSION['foto'] = $data['foto'];
					$_SESSION['login_time'] = date('Y-m-d');
					$_SESSION['login_time_enkription'] = md5(date('H:i:s'));

					$message = [
						"success" => true,
						"message" => 'login berhasil!'
					];
				} else {
					$message = [
						"success" => false,
						"message" => 'username atau password anda salah'
					];
				}
			} else {
				$message = [
					"success" => false,
					"message" => 'username atau password anda salah'
				];
			}
		}
		echo json_encode($message);
	}

	public function logout()
	{
		// abort session

		// Destroy user session
		unset($_SESSION['login']);
		unset($_SESSION['name']);
		unset($_SESSION['id']);
		unset($_SESSION['status']);
		unset($_SESSION['foto']);
		unset($_SESSION['login_time']);
		unset($_SESSION['login_time_enkription']);
		$_SESSION = [];
		$_COOKIE = [];

		// Redirect to index.php page
		header("Location: " . BASEURL . 'login');
	}
}