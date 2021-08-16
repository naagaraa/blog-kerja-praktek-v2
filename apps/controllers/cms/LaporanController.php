<?php
defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Apps\Core\Bootstraping\Controller;

class LaporanController extends Controller
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

        $data = [
            'judul' => 'Laporan',
        ];

        $this->view("admin/index_view", $data);
        $this->view("admin/shared/header_view");
        $this->view("admin/pages/laporan_view", $data);
        $this->view("admin/shared/footer_view");
    }

    public function cetak_artikel()
    {
        $bulan = htmlspecialchars($_POST["bulan"]);
        $tanggal = htmlspecialchars($_POST["tanggal"]);
        $tahun = htmlspecialchars($_POST["tahun"]);
        $limit = htmlspecialchars($_POST["limit"]);

        $waktu = "{$tahun}-{$bulan}-{$tanggal}";
        $data = [
            "waktu" => $waktu,
            "limit" => $limit,
        ];

        $artikel = $this->model("Visitor_model")->getDataArtikel($data);

        if (!empty($artikel)) {

            $message = [
                "success" => true,
                "message" => 'data ditemukan',
                "datas" => $artikel,
            ];
        } else {
            $message = [
                "success" => false,
                "message" => 'data tidak ada / tidak terdaftar',
                "datas" => null,
            ];
        }

        echo json_encode($message);
    }

    public function cetak_contact()
    {
        $bulan = htmlspecialchars($_POST["bulan"]);
        $tanggal = htmlspecialchars($_POST["tanggal"]);
        $tahun = htmlspecialchars($_POST["tahun"]);
        $limit = htmlspecialchars($_POST["limit"]);

        $waktu = "{$tahun}-{$bulan}-{$tanggal}";
        $data = [
            "tanggal" => $waktu,
            "limit" => $limit,
        ];

        $contact = $this->model("Contact_model")->getDataContact($data);

        if (!empty($contact)) {

            $message = [
                "success" => true,
                "message" => 'data ditemukan',
                "datas" => $contact,
            ];
        } else {
            $message = [
                "success" => false,
                "message" => 'data tidak ada / tidak terdaftar',
                "datas" => null,
            ];
        }

        echo json_encode($message);
    }

    public function cetak()
    {
        $bulan = htmlspecialchars($_POST["bulan"]);
        $tanggal = htmlspecialchars($_POST["tanggal"]);
        $tahun = htmlspecialchars($_POST["tahun"]);
        $limit = htmlspecialchars($_POST["limit"]);

        $waktu = "{$tahun}-{$bulan}-{$tanggal}";
        $data = [
            "waktu" => $waktu,
            "tanggal" => $waktu,
            "limit" => $limit,
        ];

        // dump($data);

        $artikel = $this->model("Visitor_model")->getDataArtikel($data);
        $contact = $this->model("Contact_model")->getDataContact($data);

        // dump($artikel);
        // dump($contact);

        if (!empty($artikel) or !empty($contact)) {
            $message = [
                "success" => true,
                "message" => 'data ditemukan',
                "artikel" => $artikel,
                "contact" => $contact,
            ];
        } else {
            $message = [
                "success" => false,
                "message" => 'data tidak ada / tidak terdaftar',
                "datas" => null,
            ];
        }

        echo json_encode($message);
    }

}
