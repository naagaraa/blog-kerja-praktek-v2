<?php
defined('BASEURL') or exit('No direct script access allowed');

use MiniMvc\Apps\Core\Bootstraping\Controller;

class ContactController extends Controller
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
			'judul' => "Contact list",
			'contact' => $this->model('contact_model')->getAllContact(),
		];

		$this->view("admin/index_view", $data);
		$this->view("admin/shared/header_view");
		$this->view("admin/pages/contact_view", $data);
		$this->view("admin/shared/footer_view");
	}

	function print($request)
	{
		// $perihal = $request;
		// $data['cetakinfo'] = $this->model('contact_model')->getContactPerihal($perihal);
		$id = $request;
		$data['cetakinfo'] = $this->model('contact_model')->getContactId($id);

		// var_dump($data['cetakinfo']);
		// die;

		$mpdf = new \Mpdf\Mpdf();
		$html = '
		<table width="100%">
			<tbody>
				<tr class="noborder" align="center">
					<td rowspan="4" width="140" style="text-align:center"><img src="' . ASSET . '\cms\img\Untitled-2.jpg' . '" height="110"></td>
					<td>
						<h2>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							PT STRATEGIC PARTNER SOLUTION
						</h2>
					</td>
				</tr>
				<tr class="noborder" align="center">
					<td colspan="2" rowspan="2">
						Jl. Arteri Permata Hijau, Kec. Kby. Lama DKI Jakarta 12210 Telp. (+62) 81287000879
					</td>
				</tr>
				<tr class="noborder" align="center">
					<td colspan="2"></td>
				</tr>
				<tr class="noborder" align="center">
					<td colspan="2">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Email :  info@myspsolution.com Homepage : http//:www.myorangt.com
					</td>
				</tr>
				<tr class="noborder" align="center">
					<td colspan="4"><hr style="border-bottom:double"></td>
				</tr>
			</tbody>
		</table>

			<div class="row mt-5">
				<div class="col table-bordered d-flex justify-content-end">
					<p>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					 Jakarta, 28 ' . substr($data['cetakinfo']['tanggal'], 0, 10) . '</p>
				</div>
			</div>
			<div class="row">
				<div class="col table-bordered">
					<p>Hal		: ' . $data['cetakinfo']['perihal'] . ' </p>
				</div>
			</div>
			<div class="row">
				<div class="col table-bordered">
					<ul type="none" >
						<li>Kepada Yth,</li>
						<li>OrangT Digital Training</li>
						<li>Jl. Arteri Permata Hijau, Kec. Kby. Lama DKI</li>
					</ul>
				</div>
			</div>

			<div class="row mt-2">
				<div class="col table-bordered d-flex justify-content-start">
					<br>
					<br>
					<br>
					<p>Dengan Hormat</p>
				</div>
			</div>
			<div class="row">
				<div class="col table-bordered d-flex">
					<p> &nbsp;&nbsp;&nbsp;&nbsp; Menanggapi melihat aplikasi yang ditawarkan sangat menarik yang di jelaskan pada website official www.myorangt.com kami dengan ini menyatakan,</p>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col table-bordered d-flex">

				<ul type="none" >
					<li>Nama 			: ' . $data['cetakinfo']['nama'] . '</li>
					<li>Email 			: ' . $data['cetakinfo']['email'] . '</li>
					<li>Nomor tlp 		: ' . $data['cetakinfo']['mobile'] . '</li>
					<li>company 		: ' . $data['cetakinfo']['company'] . '</li>
				</ul>
					<p>
						mempunyai keperluan sebagai berikut,
					</p>
					<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						' . $data['cetakinfo']['pesan'] . '
					</p>
				</div>
			</div>

			<div class="row mt-3">
				<div class="col table-bordered d-flex">
					<p> &nbsp;&nbsp;&nbsp;&nbsp; Demikian surat penawaran ini kami sampaikan. Kami berharap dapat menjalin kerja sama. Atas perhatiannya. Kami ucapkan terimakasih</p>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col table-bordered d-flex justify-content-end">
					<p>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;

					Hormat Saya,

					</p>
					<br>
					<br>
					<br>
				</div>
			</div>

			<div class="row mt-3">
				<div class="col table-bordered d-flex justify-content-end">
					<p>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;

					' . $data['cetakinfo']['nama'] . '

					</p>
					<p>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;

					' . $data['cetakinfo']['company'] . '

					</p>
				</div>
			</div>
		</div>
		';

		$stylesheet =
			"
		body {
			margin: 0 auto;
			}
			body, td, th {
				font-family: 'Source Sans Pro', sans-serif;
				font-size: 12px;
			}

			th {
				text-align: center;
			}
			.font-normal th {
				font-weight: normal;
				vertical-align: middle;
			}
			.kop {
				border-spacing: 0;
				border-collapse: collapse;
				margin-bottom:10px;
			}
			.kop td {
				padding: 0;
				text-align: left;
			}
			.kop-istitut td {
				font-size: 20px;
				line-height: 1.1;
			}
			.kop-univ td {
				font-size: 37px;
				line-height: 1.1;
				font-weight:bold;
			}

			.kop-fak td {
				font-size: 24px;
				font-weight: bold;
				line-height: 1.1;
			}
			.kop-prodi td {
				font-size: 18px;
				font-weight: bold;
				line-height: 1.1;
				padding-bottom: 5px;
			}
			.header td, .header th {
				font-size: 16px;
			}
			.mid td, .mid th {
				font-size: 14px;
			}
			.center td, .center th {
				text-align: center;
				vertical-align: middle;
			}
			table.border {
				border-collapse: collapse;
			}
			table.border td, table.border th {
				border: 1px solid black;
				vertical-align: top;
			}
			tr.noborder td, tr.noborder th {
				border: none;
			}
			hr {
				margin: 10px auto;
				border: 1px solid black;
				border-width: 1px 0 0 0;
			}
			.text-center {
				text-align: center;
			}
			.btn-flat {
				-webkit-border-radius: 0;
				-moz-border-radius: 0;
				border-radius: 0;
				-webkit-box-shadow: none;
				-moz-box-shadow: none;
				box-shadow: none;
				border-width: 1px;
			}
			.bg-info {
				background-color: #D9EDF7;
			}
			.bg-success {
				background-color: #DFF0D8;
			}
			.title{
				font-size:14px;
				font-weight:bold;
				margin-bottom:5px;
			}

			.tb_head{
				margin-bottom:5px;
			}
			.tb_head td{
				font-size:13px;
				font-weight:bold;
			}
			.tb_data td {
				font-size:12px;
			}
			.bold td{
				font-weight:bold;
			}


			.watermark {
				position: relative;
				z-index: 1;
			}

			.watermark .bg {
			position: absolute;
				z-index: -1;
				top: 0;
				bottom: 0;
				left: 0;
				right: 0;
				opacity: 0.1;
				background-size: 400px 360px;
			}

		";

		$mpdf->WriteHTML($stylesheet, 1);
		$mpdf->WriteHTML($html);
		$mpdf->Output();

		// $this->view("admin/pages/preview_message_view");
		// $this->view("admin/shared/footer_view");

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
