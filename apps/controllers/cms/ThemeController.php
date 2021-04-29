<?php
defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Apps\Core\Bootstraping\Controller;

class ThemeController extends Controller
{
	public function __construct()
	{
		// constructor here
		session_start();

	}
	public function index()
	{
		// // code index here
		if (!isset($_SESSION['login'])) {
			header('Location:' . BASEURL . 'login');
			exit;
		}

		$data = [
			'judul' =>  'Theme',
		];

		$this->view("admin/index_view", $data);
		$this->view("admin/shared/header_view");
		$this->view("admin/pages/theme_view");
		$this->view("admin/shared/footer_view");
    }
	
	// handle ajax view
	public function sosmedtheme()
	{
		if (!isset($_SESSION['login'])) {
			header('Location:' . BASEURL . 'login');
			exit;
		}

		// code index here
		$data['sosmed'] = $this->model('Sosmed_model')->getAllSosmed();

		$this->view("admin/pages/sosmed_theme_view", $data);
	}
	public function imagetheme()
	{
		if (!isset($_SESSION['login'])) {
			header('Location:' . BASEURL . 'login');
			exit;
		}

		// code index here
		$data['image'] = $this->model('Image_model')->getAllImage();

		$this->view("admin/pages/image_theme_view", $data);
	}
	public function texttheme()
	{
		if (!isset($_SESSION['login'])) {
			header('Location:' . BASEURL . 'login');
			exit;
		}

		// code index here
		$data['text'] = $this->model('Text_model')->getAllText();

		$this->view("admin/pages/text_theme_view", $data);
	}
	// end handle ajax view



	public function insert_sosmedtheme()
	{
		// buat zona time indonesia
		date_default_timezone_set('Asia/Jakarta');

		//  get value identitas
		$data = [
			'uniqid' => uniqid(),
			'sosmed' => htmlspecialchars($_POST['sosmed']),
			'link' => htmlspecialchars($_POST['link']),
			'createat' => date('Y-m-d H:i:s', time()),
			'updateat' =>  date('Y-m-d H:i:s', time()),
			'updateby' =>  'admin'
		];

		// var_dump($data);die;

		// insert data
		if ($this->model('Sosmed_model')->insertdata($data) > 0) {
			// jika sukses
			header('Location: ' . BASEURL . 'theme');
		}
		exit;

	}

	public function insert_texttheme()
	{
		// buat zona time indonesia
		date_default_timezone_set('Asia/Jakarta');

		//  get value identitas
		$data = [
			'uniqid' => uniqid(),
			'judul' => htmlspecialchars($_POST['judul']),
			'content' => htmlspecialchars($_POST['content']),
			'createat' => date('Y-m-d H:i:s', time()),
			'updateat' =>  date('Y-m-d H:i:s', time()),
			'updateby' =>  'admin'
		];

		// var_dump($data);die;

		// insert data
		if ($this->model('Text_model')->insertdata($data) > 0) {
			// jika sukses
			header('Location: ' . BASEURL . 'theme');
		}
		exit;

	}

	public function insert_imagetheme()
	{

		// buat zona time indonesia
		date_default_timezone_set('Asia/Jakarta');

		// get value gambar
		$gambar = [
			'namaFile' => $this->lib('randName')->getRandomName($_FILES['image']['name']),
			'tmpName' => $_FILES['image']['tmp_name'],
			'typeFile' => $_FILES['image']['type'],
			'sizeFile' => $_FILES['image']['size'],
			'msgError' => $_FILES['image']['error']
		];

		/**
		 *  Config File
		 *  buat directori file upload
		 *  mengambil eksitensi file tersebut
		 *  membuat config file exsitensi yang di izinkan
		 */
		$target_dir = PathImageTheme;
		$target_file = $target_dir . basename($gambar['namaFile']);
		$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
		$extensions_arr = ["jpg", "jpeg", "png"];

		//  get value identitas
		$data = [
			'uniqid' => uniqid(),
			'judul' => htmlspecialchars($_POST['judul']),
			'image' => $gambar['namaFile'],
			'createat' => date('Y-m-d H:i:s', time()),
			'updateat' =>  date('Y-m-d H:i:s', time()),
			'updateby' =>  'admin'
		];


		// Check extension image/file
		if (in_array($imageFileType, $extensions_arr)) {
			// Convert to base64 
			$image_base64 = base64_encode(file_get_contents($gambar['tmpName']));
			$image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;
			
			// insert data
			if ($this->model('Image_model')->insertdata($data) > 0) {
				// jika sukses
				header('Location: ' . BASEURL . 'theme');
			}
			// move file
			move_uploaded_file($gambar['tmpName'], $target_dir . $gambar['namaFile']);
			exit;
		}
		exit;

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