<?php
defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Apps\Core\Bootstraping\Controller;

class ProfileController extends Controller
{

	public function __construct()
	{
        session_start();
	}

	public function index()
	{
        if (!isset($_SESSION['login'])) {
			header('Location:' . BASEURL . 'login');
			exit;
        }
        
        $id = $_SESSION['id'];
		$data = [
            'judul' =>  'Profile',
            'data_user' =>	$this->model('User_model')->getUserId($id),
		];

		$this->view("admin/index_view", $data);
		$this->view("admin/shared/header_view");
		$this->view("admin/pages/profile_user_view", $data);
		$this->view("admin/shared/footer_view");
	}

	public function update()
	{
        if (!isset($_SESSION['login'])) {
			header('Location:' . BASEURL . 'login');
			exit;
        }
        
        var_dump($_FILES['foto']);
        die;

		// config
        $id = $_POST['id'];
        $userdata = $this->model('User_model')->getUserId($id);

        $password = $_POST['password'];
        $datapasswd = $this->model('User_model')->verifpasswd($password);

        // handling
        if ( $_POST['password'] === $datapasswd['passw']) {
            # code...
            echo "pakai password lama";
            if (!empty($_FILES['foto']['name'])) {
                //  get value identitas
                $data = [
                    'id' => $userdata['id'],
                    'userid' => $userdata['id'],
                    'nama' => $_POST['nama'],
                    'deskripsi' => $_POST['deskripsi'],
                    'foto' => $userdata['foto'],
                    'user_name' => $_POST['username'],
                    'passw' => $userdata['passw'],
                    'level' => $userdata['level'],
                    'status' => $userdata['status'],
                ];
    
           
                // insert data
                if ($this->model('User_model')->updateUserId($data) > 0) {
                    // jika sukses
                    $message = [
                        "success" => true,
                        "message" => 'data berhasil di update'
                    ];
                } 
                exit;                
            }else{
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
    
                //  get value identitas
                $data = [
                    'id' => $userdata['id'],
                    'userid' => $userdata['id'],
                    'nama' => $_POST['nama'],
                    'deskripsi' => $_POST['deskripsi'],
                    'foto' => $gambar['namaFile'],
                    'user_name' => $_POST['username'],
                    'passw' => $userdata['passw'],
                    'level' => $userdata['level'],
                    'status' => $userdata['status'],
                ];
    
                // var_dump($data);
                // die;
    
                // Check extension image/file
                if (in_array($imageFileType, $extensions_arr)) {
                    // Convert to base64 
                    $image_base64 = base64_encode(file_get_contents($gambar['tmpName']));
                    $image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;
                    // insert data
                    if ($this->model('User_model')->updateUserId($data) > 0) {
                        // jika sukses
                        $message = [
                            "success" => true,
                            "message" => 'data berhasil di update'
                        ];
                    }
                    // move file
                    move_uploaded_file($gambar['tmpName'], $target_dir . $gambar['namaFile']);
                    exit;
                }
            }
        } else {
            echo "pakai password baru";
            if ($_FILES['foto']['name'] === "" ) {
                //  get value identitas
                $data = [
                    'id' => $userdata['id'],
                    'userid' => $userdata['id'],
                    'nama' => $_POST['nama'],
                    'deskripsi' => $_POST['deskripsi'],
                    'foto' => $userdata['foto'],
                    'user_name' => $_POST['username'],
                    'passw' => md5($_POST['password']),
                    'level' => $userdata['level'],
                    'status' => $userdata['status'],
                ];
    
                // var_dump($data);
                // die;
    
                // insert data
                if ($this->model('User_model')->updateUserId($data) > 0) {
                    // jika sukses
                    $message = [
                        "success" => true,
                        "message" => 'data berhasil di update'
                    ];
                }
                exit;
            }else{
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
    
                //  get value identitas
                $data = [
                    'id' => $userdata['id'],
                    'userid' => $userdata['id'],
                    'nama' => $_POST['nama'],
                    'deskripsi' => $_POST['deskripsi'],
                    'foto' => $gambar['namaFile'],
                    'user_name' => $_POST['username'],
                    'passw' => md5($_POST['password']),
                    'level' => $userdata['level'],
                    'status' => $userdata['status'],
                ];
    
                // var_dump($data);
                // die;
    
                // Check extension image/file
                if (in_array($imageFileType, $extensions_arr)) {
                    // Convert to base64 
                    $image_base64 = base64_encode(file_get_contents($gambar['tmpName']));
                    $image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;
                    // insert data
                    if ($this->model('User_model')->updateUserId($data) > 0) {
                        // jika sukses
                        $message = [
                            "success" => true,
                            "message" => 'data berhasil di update'
                        ];
                    }
                    // move file
                    move_uploaded_file($gambar['tmpName'], $target_dir . $gambar['namaFile']);
                    exit;
                }
            }
        }
	}
}