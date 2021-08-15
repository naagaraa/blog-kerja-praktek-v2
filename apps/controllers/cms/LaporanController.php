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
        $order = htmlspecialchars($_POST["order"]);

        $waktu = "{$tahun}-{$bulan}-{$tanggal}";
        $data = [
            "waktu" => $waktu,
            "limit" => $limit,
            "order" => $order,
        ];

        $artikel = $this->model("Visitor_model")->getDataArtikel($data);

        if (!empty($artikel)) {

            $message = [
                "success" => true,
                "message" => 'data ditemukan',
                "data" => $artikel,
            ];
        } else {
            $message = [
                "success" => false,
                "message" => 'data tidak ada / tidak terdaftar',
                "data" => null,
            ];
        }

        echo json_encode($message);
    }

}
