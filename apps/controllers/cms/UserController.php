<?php
defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Apps\Core\Bootstraping\Controller;

class UserController extends Controller
{
	public function __construct()
	{
		// constructor here
		session_start();

	}
	public function index()
	{
		if (!isset($_SESSION['login'])) {
			header('Location:' . BASEURL . 'login');
			exit;
		}

		// code index here
		$data = [
			'judul' => "Admin - Pengguna",
			'user' => $this->model('User_model')->getAllUser()
		];


		$this->view("admin/index_view", $data);
		$this->view("admin/shared/header_view");
		$this->view("admin/pages/user_list_view", $data);
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
		// cek jika bukan super admin / admin
		$id=$request;
		if (!isset($_SESSION['login'])) {
			header('Location:' . BASEURL . 'login');
			exit;
		}
		/**
		 * Belum Buat Pengecekan jika file gambar tidak ada
		 */
		$data['user'] = $this->model('User_model')->getUserId($id);
		
		$filename = $data['user']['foto'];
		$path =  PathImageAccount . $filename;

		if (file_exists($path)) {
			unlink($path);
			// $data['deaktif'] = $this->model('User_model')->deleteUserId($id);
			// header('Location: ' . BASEURL . 'user/list');
			if ($this->model('User_model')->deleteUserId($id) > 0) {
				// jika sukses
				header('Location: ' . BASEURL . 'user/list');
			}
			// if (!unlink($path)) {
			// 	echo "File Not Found or file Move";
			// 	header('Location: ' . BASEURL . 'user/list');
			// } else {
			// 	echo "You file has been Deleted";
			// 	header('Location: ' . BASEURL . 'user/list');
			// }
			// var_dump('file ada');
		} elseif (!file_exists($path)) {
			if ($this->model('User_model')->deleteUserId($id) > 0) {
				// jika sukses
				header('Location: ' . BASEURL . 'user/list');
			}
			// $data['deaktif'] = $this->model('User_model')->deleteUserId($id);
			// header('Location: ' . BASEURL . 'user/list');
			// var_dump('file tidak ada');
		}
	}
	public function approve($request)
	{
		$id=$request;
		// cek jika bukan super admin / admin
		if (!isset($_SESSION['login'])) {
			header('Location:' . BASEURL . 'login');
			exit;
		}
		/**
		 * Belum Buat Pengecekan jika file gambar tidak ada
		 */
		$data['user'] = $this->model('User_model')->getUserId($id);

		$approveuser = [
			'id' => $data['user']['id'],
			'userid' => $data['user']['userid'],
			'nama' => $data['user']['nama'],
			'deskripsi' => $data['user']['deskripsi'],
			'foto' => $data['user']['foto'],
			'user_name' => $data['user']['user_name'],
			'passw' => $data['user']['passw'],
			'level' => $data['user']['level'],
		];

		if ($this->model('User_model')->approveUserId($approveuser) > 0) {
			// jika sukses
			header('Location: ' . BASEURL . 'user/list');
		}
	}

	public function unapprove($request)
	{
		$id=$request;
		// cek jika bukan super admin / admin
		if (!isset($_SESSION['login'])) {
			header('Location:' . BASEURL . 'login');
			exit;
		}
		/**
		 * Belum Buat Pengecekan jika file gambar tidak ada
		 */
		$data['user'] = $this->model('User_model')->getUserId($id);

		$unapproveuser = [
			'id' => $data['user']['id'],
			'userid' => $data['user']['userid'],
			'nama' => $data['user']['nama'],
			'deskripsi' => $data['user']['deskripsi'],
			'foto' => $data['user']['foto'],
			'user_name' => $data['user']['user_name'],
			'passw' => $data['user']['passw'],
			'level' => $data['user']['level'],
		];
		if ($this->model('User_model')->unApproveUserId($unapproveuser) > 0) {
			// jika sukses
			header('Location: ' . BASEURL . 'user/list');
		}
	}
}
