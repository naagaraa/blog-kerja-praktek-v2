<!-- WRAPPER -->
<div id="wrapper">
	<!-- LEFT SIDE BAR -->
	<?php $this->view("admin/shared/sidebar_view");
	?>
	<!-- END LEFT SIDE BAR -->
	<!-- MAIN -->
	<div class="main">
		<!-- MAIN CONTENT -->
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<!-- TASKS -->
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Halaman Contact</h3>
								<div class="right">
									<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
									<!-- <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button> -->
								</div>
							</div>
							<div class="panel-body">
								<!-- menggunakan datatable -->
								<table id="table_id" class="table table-striped table-dark">
									<thead>
										<tr>
											<th scope="col">No</th>
											<th scope="col">Nama</th>
											<th scope="col">Email</th>
											<th scope="col">perihal</th>
											<th scope="col">Tanggal</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $i = 1;
										foreach ($data['contact'] as $contact) : ?>
											<tr>
												<th scope="row"><?= $i++; ?></th>
												<td><?= substr($contact['nama'], 0, 9); ?></td>
												<td><?= substr($contact['email'], 0, 100); ?></td>
												<td><?= substr($contact['perihal'], 0, 100); ?></td>
												<td><?= substr($contact['tanggal'], 0, 100); ?></td>
												<td>
													<a target="_blank" href="<?= BASEURL ?>contact/preview/<?= $contact['id']; ?>">
														<button type="button" class="btn btn-info">Cetak</button>
													</a>
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
								<!-- END DATA TABLE -->
							</div>
						</div>
						<!-- END TASKS -->
					</div>
				</div>
			</div>
		</div>
		<!-- END MAIN CONTENT -->
	</div>
	<!-- END MAIN -->