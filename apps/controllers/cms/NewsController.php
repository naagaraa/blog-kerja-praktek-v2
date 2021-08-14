<?php
defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Apps\Core\Bootstraping\Controller;

class NewsController extends Controller
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
            'judul' => "Artikel - list ",
            'listNews' => $this->model('Artikel_model')->getAllArtikel(),
        ];

        $this->view("admin/index_view", $data);
        $this->view("admin/shared/header_view");
        $this->view("admin/pages/list_news_view", $data);
        $this->view("admin/shared/footer_view");
    }

    public function insert()
    {
        if (!isset($_SESSION['login'])) {
            header('Location:' . BASEURL . 'login');
            exit;
        }

        # code...
        $data['judul'] = "Artikel - Tambah ";

        $this->view("admin/index_view", $data);
        $this->view("admin/shared/header_view");
        $this->view("admin/pages/add_news_view");
        $this->view("admin/shared/footer_view");
    }

    public function show($urlid)
    {
        if (!isset($_SESSION['login'])) {
            header('Location:' . BASEURL . 'login');
            exit;
        }

        // code here show here
        $data = [
            'judul' => "Artikel - show ",
            'News' => $this->model('Artikel_model')->getArtikelId($urlid),
        ];

        $this->view("admin/index_view", $data);
        $this->view("admin/shared/header_view");
        $this->view("admin/pages/edit_news_view", $data);
        $this->view("admin/shared/footer_view");
    }

    public function create()
    {
        if (!isset($_SESSION['login'])) {
            header('Location:' . BASEURL . 'login');
            exit;
        }

        // code here create here
        $uniqid = uniqid();

        // get value gambar
        $coverArtikel = [
            'namaFile' => $this->lib('randName')->getRandomName($_FILES['cover']['name']),
            'tmpName' => $_FILES['cover']['tmp_name'],
            'typeFile' => $_FILES['cover']['type'],
            'sizeFile' => $_FILES['cover']['size'],
            'msgError' => $_FILES['cover']['error'],
        ];

        $artikelImage = [
            'namaFile' => $this->lib('randName')->getRandomName($_FILES['gambar']['name']),
            'tmpName' => $_FILES['gambar']['tmp_name'],
            'typeFile' => $_FILES['gambar']['type'],
            'sizeFile' => $_FILES['gambar']['size'],
            'msgError' => $_FILES['gambar']['error'],
        ];

        /**
         *  Config File
         *  buat directori file upload
         *  mengambil eksitensi file tersebut
         *  membuat config file exsitensi yang di izinkan
         */
        $targetCoverArtikel_dir = PathCover;
        $targetArtikelImage_dir = PathImage;

        $targetCoverArtikel_file = $targetCoverArtikel_dir . basename($coverArtikel['namaFile']);
        $targetArtikelImage_file = $targetArtikelImage_dir . basename($artikelImage['namaFile']);

        $imageCoverFileType = strtolower(pathinfo($targetCoverArtikel_file, PATHINFO_EXTENSION));
        $imageArtikelFileType = strtolower(pathinfo($targetArtikelImage_file, PATHINFO_EXTENSION));

        // extension yg di izinkan
        $extensions_arr = ["jpg", "jpeg", "png"];

        // buat zona time indonesia
        date_default_timezone_set('Asia/Jakarta');

        $title = htmlspecialchars($_POST['judul']);

        // create urlif fron title
        $lowercase = strtolower($title);
        $specChars = array(
            '!', '"',
            '#', '$', '%',
            '&amp;', '\'', '(',
            ')', '*', '+',
            ',', '₹', '.',
            '/-', ':', ';',
            '<', '=', '>',
            '?', '@', '[',
            '\\', ']', '^',
            '_', '`', '{',
            '|', '}', '~',
            '-----', '----', '---',
            '/', '--', '/_',

        );

        $textRemoveSpesialChar = trim(str_replace($specChars, '', $lowercase));
        $urlId = str_replace(" ", "-", $textRemoveSpesialChar);
        // end urlid

        //  get value identitas
        $data = [
            'uniqid' => $uniqid,
            'urlid' => $urlId,
            'judul' => htmlspecialchars($_POST['judul']),
            'penulis' => htmlspecialchars($_POST['penulis']),
            'status' => htmlspecialchars($_POST['status']),
            'coverArtikel' => $coverArtikel['namaFile'],
            'imageArtikel' => $artikelImage['namaFile'],
            'content' => $_POST['content'],
            'current_visit' => 0,
            'remote_adr' => $_SERVER['REMOTE_ADDR'],
            'posting' => date('Y-m-d H:i:s', time()),
        ];

        // Check extension image/file
        if (in_array($imageCoverFileType, $extensions_arr) || in_array($imageArtikelFileType, $extensions_arr)) {

            // Convert cover to base64
            $imagecover_base64 = base64_encode(file_get_contents($coverArtikel['tmpName']));
            $coverImage = 'data:image/' . $imageCoverFileType . ';base64,' . $imagecover_base64;

            // Convert image to base64
            $imageartikel_base64 = base64_encode(file_get_contents($artikelImage['tmpName']));
            $imagerArtikel = 'data:image/' . $imageArtikelFileType . ';base64,' . $imageartikel_base64;

            $this->model('Visitor_model')->insertData($data);
            // insert data
            if ($this->model('Artikel_model')->insertArtikel($data) > 0) {
                // jika sukses
                header('Location: ' . BASEURL . '/artikel/list');
            }
            // move file to foler
            move_uploaded_file($coverArtikel['tmpName'], $targetCoverArtikel_dir . $coverArtikel['namaFile']);
            move_uploaded_file($artikelImage['tmpName'], $targetArtikelImage_dir . $artikelImage['namaFile']);
            exit;
        }
    }

    public function update()
    {
        if (!isset($_SESSION['login'])) {
            header('Location:' . BASEURL . 'login');
            exit;
        }

        // code here update here
        $id = $_POST['id'];
        $uniqid = $_POST['uniqid'];
        $data['News'] = $this->model('Artikel_model')->getArtikelUniqId($uniqid);

        if (empty($_FILES['cover']['name']) && empty($_FILES['gambar']['name'])) {
            echo "tidak ada gambar yg di upload";
            /**
             * untuk mengatasi bila tidak ada gambar yang dirubah
             */
            // buat zona time indonesia
            date_default_timezone_set('Asia/Jakarta');
            $title = htmlspecialchars($_POST['judul']);

            // create urlif fron title
            $lowercase = strtolower($title);
            $specChars = array(
                '!', '"',
                '#', '$', '%',
                '&amp;', '\'', '(',
                ')', '*', '+',
                ',', '₹', '.',
                '/-', ':', ';',
                '<', '=', '>',
                '?', '@', '[',
                '\\', ']', '^',
                '_', '`', '{',
                '|', '}', '~',
                '-----', '----', '---',
                '/', '--', '/_',

            );

            $textRemoveSpesialChar = trim(str_replace($specChars, '', $lowercase));
            $urlId = str_replace(" ", "-", $textRemoveSpesialChar);
            // end urlid

            $uniqid = $_POST['uniqid'];
            $data['News'] = $this->model('Artikel_model')->getArtikelUniqId($uniqid);

            $data = [
                'id' => (int) htmlspecialchars($_POST['id']),
                'urlid' => $urlId,
                'uniqid' => $uniqid,
                'judul' => htmlspecialchars($_POST['judul']),
                'penulis' => htmlspecialchars($_POST['penulis']),
                'status' => 1,
                'coverArtikel' => $data['News']['cover'],
                'imageArtikel' => $data['News']['image'],
                'content' => $_POST['content'],
                'posting' => date('Y-m-d H:i:s', time()),
            ];

            /**
             * config untuk delete file yang lama
             */

            $visitor = $this->model('Visitor_model')->getInfoVisitUniqId($uniqid);

            // var_dump($waktuUpdate);
            $dataviews = [
                'id' => (int) htmlspecialchars($_POST['id']),
                'uniqid' => $uniqid,
                'urlid' => $urlId,
                'judul_content' => htmlspecialchars($_POST['judul']),
                'visit_views' => $visitor['visit_views'],
                'visitor_ip' => $visitor['visitor_ip'],
                'waktu' => $visitor['waktu'],
            ];

            if ($this->model('Visitor_model')->UpdateData($dataviews) > 0) {
                echo 'berhasil update';
            }
            // var_dump($data);die;
            // insert data
            if ($this->model('Artikel_model')->updateArtikel($data) > 0) {
                // jika sukses
                header('Location: ' . BASEURL . 'artikel/list');
            }
        } elseif (!empty($_FILES['cover']['name']) && !empty($_FILES['gambar']['name'])) {
            echo "Kedua gambar yg di upload";
            /**
             * untuk mengatasi bila ada gambar yang di ganti
             */
            // get value gambar
            $coverArtikel = [
                'namaFile' => $this->lib('randName')->getRandomName($_FILES['cover']['name']),
                'tmpName' => $_FILES['cover']['tmp_name'],
                'typeFile' => $_FILES['cover']['type'],
                'sizeFile' => $_FILES['cover']['size'],
                'msgError' => $_FILES['cover']['error'],
            ];

            $artikelImage = [
                'namaFile' => $this->lib('randName')->getRandomName($_FILES['gambar']['name']),
                'tmpName' => $_FILES['gambar']['tmp_name'],
                'typeFile' => $_FILES['gambar']['type'],
                'sizeFile' => $_FILES['gambar']['size'],
                'msgError' => $_FILES['gambar']['error'],
            ];
            /**
             *  Config File
             *  buat directori file upload
             *  mengambil eksitensi file tersebut
             *  membuat config file exsitensi yang di izinkan
             */
            $targetCoverArtikel_dir = PathCover;
            $targetArtikelImage_dir = PathImage;

            $targetCoverArtikel_file = $targetCoverArtikel_dir . basename($coverArtikel['namaFile']);
            $targetArtikelImage_file = $targetArtikelImage_dir . basename($artikelImage['namaFile']);

            $imageCoverFileType = strtolower(pathinfo($targetCoverArtikel_file, PATHINFO_EXTENSION));
            $imageArtikelFileType = strtolower(pathinfo($targetArtikelImage_file, PATHINFO_EXTENSION));

            // extension yg di izinkan
            $extensions_arr = ["jpg", "jpeg", "png"];

            // buat zona time indonesia
            date_default_timezone_set('Asia/Jakarta');
            $title = htmlspecialchars($_POST['judul']);

            // create urlif fron title
            $lowercase = strtolower($title);
            $specChars = array(
                '!', '"',
                '#', '$', '%',
                '&amp;', '\'', '(',
                ')', '*', '+',
                ',', '₹', '.',
                '/-', ':', ';',
                '<', '=', '>',
                '?', '@', '[',
                '\\', ']', '^',
                '_', '`', '{',
                '|', '}', '~',
                '-----', '----', '---',
                '/', '--', '/_',

            );

            $textRemoveSpesialChar = trim(str_replace($specChars, '', $lowercase));
            $urlId = str_replace(" ", "-", $textRemoveSpesialChar);
            $uniqid = $_POST['uniqid'];
            // end urlid
            //  get value identitas
            $data = [
                'urlid' => $urlId,
                'uniqid' => $uniqid,
                'id' => htmlspecialchars($_POST['id']),
                'judul' => htmlspecialchars($_POST['judul']),
                'penulis' => htmlspecialchars($_POST['penulis']),
                'status' => 1,
                'coverArtikel' => $coverArtikel['namaFile'],
                'imageArtikel' => $artikelImage['namaFile'],
                'content' => $_POST['content'],
                'posting' => date('Y-m-d H:i:s', time()),
            ];

            /**
             * config untuk delete file yang lama
             */

            $data['News'] = $this->model('Artikel_model')->getArtikelUniqId($uniqid);

            $fileNameCover = $data['News']['cover'];
            $fileNameImage = $data['News']['image'];

            // old path files
            $path = [
                'cover' => PathCover . $fileNameCover,
                'image' => PathImage . $fileNameImage,
            ];

            // cek jika ada old file
            if (file_exists($path['cover']) && file_exists($path['image'])) {
                unlink($path['cover']);
                unlink($path['image']);
            }

            /**
             * end config untuk delete file yang lama
             */

            // Check extension image/file
            if (in_array($imageCoverFileType, $extensions_arr) || in_array($imageArtikelFileType, $extensions_arr)) {

                // Convert cover to base64
                $imagecover_base64 = base64_encode(file_get_contents($coverArtikel['tmpName']));
                $coverImage = 'data:image/' . $imageCoverFileType . ';base64,' . $imagecover_base64;

                // Convert image to base64
                $imageartikel_base64 = base64_encode(file_get_contents($artikelImage['tmpName']));
                $imagerArtikel = 'data:image/' . $imageArtikelFileType . ';base64,' . $imageartikel_base64;

                // insert data
                if ($this->model('Artikel_model')->updateArtikel($data) > 0) {
                    // jika sukses
                    header('Location: ' . BASEURL . 'artikel/list');
                }

                // move file to foler
                move_uploaded_file($coverArtikel['tmpName'], $targetCoverArtikel_dir . $coverArtikel['namaFile']);
                move_uploaded_file($artikelImage['tmpName'], $targetArtikelImage_dir . $artikelImage['namaFile']);
                exit;
            }
        } elseif (!empty($_FILES['cover']['name']) || empty($_FILES['gambar']['name'])) {
            echo "ada salah satu gambar yg di upload (cover)";
            /**
             * untuk mengatasi bila ada gambar yang di ganti
             */
            // get value gambar
            $coverArtikel = [
                'namaFile' => $this->lib('randName')->getRandomName($_FILES['cover']['name']),
                'tmpName' => $_FILES['cover']['tmp_name'],
                'typeFile' => $_FILES['cover']['type'],
                'sizeFile' => $_FILES['cover']['size'],
                'msgError' => $_FILES['cover']['error'],
            ];

            /**
             *  Config File
             *  buat directori file upload
             *  mengambil eksitensi file tersebut
             *  membuat config file exsitensi yang di izinkan
             */
            $targetCoverArtikel_dir = PathCover;
            $targetCoverArtikel_file = $targetCoverArtikel_dir . basename($coverArtikel['namaFile']);
            $imageCoverFileType = strtolower(pathinfo($targetCoverArtikel_file, PATHINFO_EXTENSION));

            // extension yg di izinkan
            $extensions_arr = ["jpg", "jpeg", "png"];

            // buat zona time indonesia
            date_default_timezone_set('Asia/Jakarta');

            $title = htmlspecialchars($_POST['judul']);

            // create urlif fron title
            $lowercase = strtolower($title);
            $specChars = array(
                '!', '"',
                '#', '$', '%',
                '&amp;', '\'', '(',
                ')', '*', '+',
                ',', '₹', '.',
                '/-', ':', ';',
                '<', '=', '>',
                '?', '@', '[',
                '\\', ']', '^',
                '_', '`', '{',
                '|', '}', '~',
                '-----', '----', '---',
                '/', '--', '/_',

            );

            $textRemoveSpesialChar = trim(str_replace($specChars, '', $lowercase));
            $urlId = str_replace(" ", "-", $textRemoveSpesialChar);
            $uniqid = $_POST['uniqid'];
            // end urlid

            //  get value identitas
            $data = [
                'id' => (int) htmlspecialchars($_POST['id']),
                'urlid' => $urlId,
                'uniqid' => $uniqid,
                'judul' => htmlspecialchars($_POST['judul']),
                'penulis' => htmlspecialchars($_POST['penulis']),
                'status' => 1,
                'coverArtikel' => $coverArtikel['namaFile'],
                'imageArtikel' => $data['News']['image'],
                'content' => $_POST['content'],
                'posting' => date('Y-m-d H:i:s', time()),
            ];

            // var_dump($data);die;

            /**
             * config untuk delete file yang lama
             */

            $data['News'] = $this->model('Artikel_model')->getArtikelUniqId($uniqid);

            $fileNameCover = $data['News']['cover'];
            $fileNameImage = $data['News']['image'];

            // old path files
            $path = [
                'cover' => PathCover . $fileNameCover,
                'image' => PathImage . $fileNameImage,
            ];

            // cek jika ada old file
            if (file_exists($path['cover']) && file_exists($path['image'])) {
                unlink($path['cover']);
            }

            /**
             * end config untuk delete file yang lama
             */

            // Check extension image/file
            if (in_array($imageCoverFileType, $extensions_arr)) {

                // Convert cover to base64
                $imagecover_base64 = base64_encode(file_get_contents($coverArtikel['tmpName']));
                $coverImage = 'data:image/' . $imageCoverFileType . ';base64,' . $imagecover_base64;

                // insert data
                if ($this->model('Artikel_model')->updateArtikel($data) > 0) {
                    // jika sukses
                    header('Location: ' . BASEURL . 'artikel/list');
                }
                // move file to foler
                move_uploaded_file($coverArtikel['tmpName'], $targetCoverArtikel_dir . $coverArtikel['namaFile']);
                exit;
            }
        } elseif (empty($_FILES['cover']['name']) || !empty($_FILES['gambar']['name'])) {
            echo "ada salah satu gambar yg di upload (image)";
            /**
             * untuk mengatasi bila ada gambar yang di ganti
             */

            // get value gambar
            $artikelImage = [
                'namaFile' => $this->lib('randName')->getRandomName($_FILES['gambar']['name']),
                'tmpName' => $_FILES['gambar']['tmp_name'],
                'typeFile' => $_FILES['gambar']['type'],
                'sizeFile' => $_FILES['gambar']['size'],
                'msgError' => $_FILES['gambar']['error'],
            ];

            /**
             *  Config File
             *  buat directori file upload
             *  mengambil eksitensi file tersebut
             *  membuat config file exsitensi yang di izinkan
             */
            $targetArtikelImage_dir = PathImage;
            $targetArtikelImage_file = $targetArtikelImage_dir . basename($artikelImage['namaFile']);
            $imageArtikelFileType = strtolower(pathinfo($targetArtikelImage_file, PATHINFO_EXTENSION));

            // extension yg di izinkan
            $extensions_arr = ["jpg", "jpeg", "png"];

            // buat zona time indonesia
            date_default_timezone_set('Asia/Jakarta');
            $title = htmlspecialchars($_POST['judul']);

            // create urlif fron title
            $lowercase = strtolower($title);
            $specChars = array(
                '!', '"',
                '#', '$', '%',
                '&amp;', '\'', '(',
                ')', '*', '+',
                ',', '₹', '.',
                '/-', ':', ';',
                '<', '=', '>',
                '?', '@', '[',
                '\\', ']', '^',
                '_', '`', '{',
                '|', '}', '~',
                '-----', '----', '---',
                '/', '--', '/_',

            );

            $textRemoveSpesialChar = trim(str_replace($specChars, '', $lowercase));
            $urlId = str_replace(" ", "-", $textRemoveSpesialChar);
            $uniqid = $_POST['uniqid'];
            // end urlid

            //  get value identitas
            $data = [
                'id' => (int) htmlspecialchars($_POST['id']),
                'urlid' => $urlId,
                'uniqid' => $uniqid,
                'judul' => htmlspecialchars($_POST['judul']),
                'penulis' => htmlspecialchars($_POST['penulis']),
                'status' => 1,
                'coverArtikel' => $data['News']['cover'],
                'imageArtikel' => $artikelImage['namaFile'],
                'content' => $_POST['content'],
                'posting' => date('Y-m-d H:i:s', time()),
            ];

            /**
             * config untuk delete file yang lama
             */
            $image['News'] = $this->model('Artikel_model')->getArtikelId($urlId);

            $fileNameCover = $image['News']['cover'];
            $fileNameImage = $image['News']['image'];

            // old path files
            $path = [
                'cover' => PathCover . $fileNameCover,
                'image' => PathImage . $fileNameImage,
            ];

            // cek jika ada old file
            if (file_exists($path['cover']) && file_exists($path['image'])) {
                unlink($path['image']);
            }

            /**
             * end config untuk delete file yang lama
             */

            // Check extension image/file
            if (in_array($imageArtikelFileType, $extensions_arr)) {

                // Convert image to base64
                $imageartikel_base64 = base64_encode(file_get_contents($artikelImage['tmpName']));
                $imagerArtikel = 'data:image/' . $imageArtikelFileType . ';base64,' . $imageartikel_base64;

                // insert data
                if ($this->model('Artikel_model')->updateArtikel($data) > 0) {
                    // jika sukses
                    header('Location: ' . BASEURL . 'artikel/list');
                }
                // move file to foler
                move_uploaded_file($artikelImage['tmpName'], $targetArtikelImage_dir . $artikelImage['namaFile']);
                exit;
            }
        }
    }

    public function remove($request)
    {
        if (!isset($_SESSION['login'])) {
            header('Location:' . BASEURL . 'login');
            exit;
        }

        // code here remove here
        /**
         * Belum Buat Pengecekan jika file gambar tidak ada
         */
        $uniqid = $request;
        $data['artikel'] = $this->model('Artikel_model')->getArtikelUniqId($uniqid);

        $fileNameCover = $data['artikel']['cover'];
        $fileNameImage = $data['artikel']['image'];

        $path = [
            'cover' => PathCover . $fileNameCover,
            'image' => PathImage . $fileNameImage,
        ];

        if (file_exists($path['cover']) and file_exists($path['image'])) {
            /*
             * delete file cover then
             * delete file image
             */
            $data['deaktifArtikel'] = $this->model('Artikel_model')->deleteArtikelUniqId($uniqid);
            $data['deaktifVisitor'] = $this->model('Visitor_model')->deleteDataUniqId($uniqid);

            unlink($path['cover']);
            unlink($path['image']);
            header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Location: ' . BASEURL . 'artikel/list');
        } elseif (!file_exists($path['cover']) or file_exists($path['image'])) {

            // delete
            $data['deaktifArtikel'] = $this->model('Artikel_model')->deleteArtikelUniqId($uniqid);
            $data['deaktifVisitor'] = $this->model('Visitor_model')->deleteDataUniqId($uniqid);

            // unlink($path['cover']);
            unlink($path['image']);
            header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Location: ' . BASEURL . 'artikel/list');
        } elseif (file_exists($path['cover']) or !file_exists($path['image'])) {

            // delete
            $data['deaktifArtikel'] = $this->model('Artikel_model')->deleteArtikelUniqId($uniqid);
            $data['deaktifVisitor'] = $this->model('Visitor_model')->deleteDataUniqId($uniqid);

            unlink($path['cover']);
            // unlink($path['image']);
            header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Location: ' . BASEURL . 'artikel/list');
        } else {
            echo "kesalahan pada gambar";
            die;
        }

    }

    public function publishArtikel($request)
    {
        if (!isset($_SESSION['login'])) {
            header('Location:' . BASEURL . 'login');
            exit;
        }

        # code...
        $urlid = $request;
        $uniqid = uniqid();

        $data['artikel'] = $this->model('Artikel_model')->getArtikelId($urlid);
        $status = 1;

        $data = [
            'id' => $data['artikel']['id'],
            'uniqid' => $data['artikel']['uniqid'],
            'urlid' => $urlid,
            'judul' => $data['artikel']['judul'],
            'penulis' => $data['artikel']['penulis'],
            'status' => $status,
            'coverArtikel' => $data['artikel']['cover'],
            'imageArtikel' => $data['artikel']['image'],
            'content' => $data['artikel']['artikel'],
            'posting' => date('Y-m-d H:i:s', time()),
        ];

        // insert data
        if ($this->model('Artikel_model')->statusArtikelId($data) > 0) {
            // jika sukses
            header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Location: ' . BASEURL . 'artikel/list');
        }
    }

    public function unpublishArtikel($request)
    {
        if (!isset($_SESSION['login'])) {
            header('Location:' . BASEURL . 'login');
            exit;
        }

        # code...
        $urlid = $request;
        // var_dump($urlid);
        $uniqid = uniqid();

        $data['artikel'] = $this->model('Artikel_model')->getArtikelId($urlid);
        $status = 0;

        $data = [
            'id' => $data['artikel']['id'],
            'uniqid' => $data['artikel']['uniqid'],
            'urlid' => $urlid,
            'judul' => $data['artikel']['judul'],
            'penulis' => $data['artikel']['penulis'],
            'status' => $status,
            'coverArtikel' => $data['artikel']['cover'],
            'imageArtikel' => $data['artikel']['image'],
            'content' => $data['artikel']['artikel'],
            'posting' => date('Y-m-d H:i:s', time()),
        ];

        // insert data
        if ($this->model('Artikel_model')->statusArtikelId($data) > 0) {
            // jika sukses
            header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Location: ' . BASEURL . 'artikel/list');
        }
    }
}
