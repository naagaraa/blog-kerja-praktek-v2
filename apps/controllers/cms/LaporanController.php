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

}
