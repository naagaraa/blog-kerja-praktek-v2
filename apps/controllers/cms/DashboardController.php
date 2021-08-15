<?php
defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Apps\Core\Bootstraping\Controller;

class DashboardController extends Controller
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

        $visitor = $this->model('Visitor_model')->getAllRowVisitor();
        $visit_views = $this->model('Visitor_model')->getAllInfoVisitor();
        $user = $this->model('User_model')->getAllUser();

        // count visitor artikel
        $n_views = 0;
        foreach ($visit_views as $key => $value) {
            $n_views = $n_views + $visit_views[$key]["visit_views"];
        }

        $data = [
            'judul' => 'Dashboard',
            'views' => $n_views,
            'totalResource' => $visitor,
            'totalUser' => count($user),
            'artikel' => $visit_views,
        ];

        $this->view("admin/index_view", $data);
        $this->view("admin/shared/header_view");
        $this->view("admin/pages/dashboard_view", $data);
        $this->view("admin/shared/footer_view");
    }

}
