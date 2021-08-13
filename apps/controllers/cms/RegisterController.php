<?php
defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Apps\Core\Bootstraping\Controller;

class RegisterController extends Controller
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
			'judul' => "Admin- add User",
			'content' => "this is content"
		];

		$this->view("admin/index_view", $data);
		$this->view("admin/shared/header_view");
		$this->view("admin/pages/add_user_view");
		$this->view("admin/shared/footer_view");
	}

	public function create()
	{
		if (!isset($_SESSION['login'])) {
			header('Location:' . BASEURL . 'login');
			exit;
		}
		
		// code here create here
		// get value gambar
		$gambar = [
			'namaFile' => $this->lib('randName')->getRandomName($_FILES['foto']['name']),
			'tmpName' => $_FILES['foto']['tmp_name'],
			'typeFile' => $_FILES['foto']['type'],
			'sizeFile' => $_FILES['foto']['size'],
			'msgError' => $_FILES['foto']['error']
		];

		/**
		 *  Config File
		 *  buat directori file upload
		 *  mengambil eksitensi file tersebut
		 *  membuat config file exsitensi yang di izinkan
		 */
		$target_dir = PathImageAccount;
		$target_file = $target_dir . basename($gambar['namaFile']);
		$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
		$extensions_arr = ["jpg", "jpeg", "png"];

		// jika level pembuat adalah super admin langsung approve
		if($_SESSION["level"] == 0){
			$status = 1;
		}elseif($_SESSION["level"] == 1){
		// jika level pembuat adalah admin membutuhkan approve super admin
			$status = 0;
		}else{
		// jika level adalah user tidak diijikan
			echo "maaf anda tidak diijikan ";
			exit;
		}

		//  get value identitas
		$data = [
			'userid' => uniqid(),
			'nama' => htmlspecialchars($_POST['nama']),
			'username' => htmlspecialchars($_POST['username']),
			'password' => md5(htmlspecialchars($_POST['password'])),
			'level' => htmlspecialchars($_POST['level']),
			'status' => $status,
			'deskripsi' =>  $_POST['deskripsi'],
			'image' =>  $gambar['namaFile']
		];


		// Check extension image/file
		if (in_array($imageFileType, $extensions_arr)) {
			// Convert to base64 
			$image_base64 = base64_encode(file_get_contents($gambar['tmpName']));
			$image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;
			// insert data
			if ($this->model('User_model')->register($data) > 0) {
				// jika sukses
				header('Location: ' . BASEURL . 'user/list');
			}
			// move file
			move_uploaded_file($gambar['tmpName'], $target_dir . $gambar['namaFile']);
			exit;
		}
	}

}