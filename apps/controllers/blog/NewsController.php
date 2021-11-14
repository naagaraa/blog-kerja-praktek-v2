<?php
defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Apps\Core\Bootstraping\Controller;


class NewsController extends Controller
{

	public function __construct()
	{
		// code here
	}

	public function index()
	{
		$title = 'News and Event';

		$halaman = 3; //batasan halaman
		$page = 1;
		$mulai = 0;

		$data['News'] = $this->model('Artikel_model')->getAllArtikel();
		$data['SideNews'] = $this->model('Artikel_model')->getLimitSideArtikel();
		$data['Row'] = $this->model('Artikel_model')->getAllRowArtikel();
		$artikel = $this->model('Artikel_model')->getLimitArtikel($mulai, $halaman);

		$totalHalaman = $data['Row'];
		$pagesPerHalaman = ceil($totalHalaman / $halaman);

		// var_dump($artikel);
		// die;

		$data = [
			'title' => $title,
			'artikel' => $artikel,
			'artikel2' => $data['SideNews'],
			'total' => $totalHalaman,
			'pages' => $pagesPerHalaman
		];


		$this->view('blog/index_view', $data);
		$this->view('blog/shared/header_view');
		$this->view('blog/pages/news_view', $data);
		$this->view('blog/shared/footer_view');
	}


	public function detail($urlid)
	{
		// get url
		$url = $this->lib('Url')->getUrl();

		// cek jika urlid tidak ada
		if ($url[1] == 'detail' and $url[2] == '') {
			$this->view("error/error");
		}

		// init user info
		$this->lib('info')->getinfo();

		$title = 'News and Event';
		$data['News'] = $this->model('Artikel_model')->getLimitSideArtikel();
		$detail = $this->model('Artikel_model')->getArtikelId($urlid);

		// dd($detail["status"]);





		$visitor = $this->model('Visitor_model')->getInfoVisitId($urlid);

		$waktu = intval($visitor['visit_views']);
		$waktuUpdate = strval($waktu + 1);

		// var_dump($waktuUpdate);

		$dataviews = [
			'id' => $visitor['id'],
			'uniqid' => $visitor['uniqid'],
			'urlid' => $visitor['urlid'],
			'judul_content' => $visitor['judul_content'],
			'visit_views' => $waktuUpdate,
			'visitor_ip' => $visitor['visitor_ip'],
			'waktu' => $visitor['waktu'],
		];

		if ($this->model('Visitor_model')->UpdateData($dataviews) > 0) {

			// success
			$data = [
				'title' => $title,
				'detailNews' => $detail,
				'views' => $waktu,
				'artikel2' => $data['News'],
			];

			// cek url
			if ($detail['urlid'] == $url[2]) {
				$this->view('blog/pages/news_detail_view', $data);
				$this->view('blog/shared/footer_view');
			} else {
				echo "error";
			}
		};
	}

	public function search()
	{
		$key = $_POST['search'];
		$data['News'] = $this->model('Artikel_model')->getSearchArtikel($key);

		$halaman = 3; //batasan halaman
		$page = 1;
		$mulai = 0;
		$artikel = $this->model('Artikel_model')->getLimitArtikel($mulai, $halaman);

		if ($this->model('Artikel_model')->getSearch($key) > 0) {
			// jika sukses
			foreach ($data['News'] as $row) {

				// bersihkan karakter html
				$removeHtmltag = strip_tags($row['artikel']);
				$deskripsi = substr($removeHtmltag, 0, 160);

				$txt = '
				<a href="' . BASEURL . 'news/detail/' . $row['urlid'] . '" target="_blank">
					<div class="row mb-20px">
						<div class="col-md-12">
							<div class="thumbnail">
								<div class="row">
									<div class="col">
										<img src="' . BASEURL . '/upload/contents/cover/' . $row['cover'] . '" alt="cover" width="350">\\
									</div>
									<div class="col">
										<div class="caption mt-30">
											<h3>' . $row['judul'] . '</h3>
											<p>' . $deskripsi . ' </p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div
				</a>';
			};
			echo $txt;
		} else {
			// code
			echo "Not Data found";
		}
	}

	public function viewpost()
	{
		$halaman = 3; //batasan halaman
		$page = 1;
		$mulai = 0;

		$artikel = $this->model('Artikel_model')->getLimitArtikel($mulai, $halaman);

		$txt = '';
		foreach ($artikel as $row) {
			// bersihkan karakter html
			$removeHtmltag = strip_tags($row['artikel']);
			$deskripsi = substr($removeHtmltag, 0, 160);

			$txt .= '
			<a href="' . BASEURL . 'news/detail/' . $row['urlid'] . '" target="_blank">
				<div class="row mb-20px">
					<div class="col-md-12">
						<div class="thumbnail">
							<div class="row">
								<div class="col">
									<img src="' . BASEURL . '/upload/contents/cover/' . $row['cover'] . '" alt="cover" width="350">\\
								</div>
								<div class="col">
									<div class="caption mt-30">
										<h3>' . $row['judul'] . '</h3>
										<p>' . $deskripsi . ' </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div
			</a>';
		};

		echo $txt;
	}

	public function page($id = '0')
	{
		// init user info
		$this->lib('info')->getinfo();

		if ($id == '0') {
			header('Location:' . BASEURL . 'News');
			// die;
		} else {
			$halaman = 3; //batasan halaman
			$page = isset($id) ? (int) $id : 1;
			$mulai = ($page > 1) ? ($page * $halaman) - $halaman : 0;

			$data['News'] = $this->model('Artikel_model')->getLimitSideArtikel();
			$resultRow = $this->model('Artikel_model')->getAllRowArtikel();
			$artikel = $this->model('Artikel_model')->getLimitArtikel($mulai, $halaman);

			$totalHalaman = $resultRow;
			$pagesPerHalaman = ceil($totalHalaman / $halaman);

			$data = [
				'title' => 'News and Event',
				'artikel' => $artikel,
				'artikel2' => $data['News'],
				'total' => $totalHalaman,
				'pages' => $pagesPerHalaman
			];

			$this->view('blog/index_view', $data);
			$this->view('blog/shared/header_view');
			$this->view('blog/pages/news_view', $data);
			$this->view('blog/shared/footer_view');
		}
	}
}
