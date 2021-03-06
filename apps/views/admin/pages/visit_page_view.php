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
								<h3 class="panel-title">Halaman Visit Views</h3>
								<div class="right">
									<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
									<!-- <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button> -->
								</div>
							</div>
							<div class="panel-body">
								<table id="table_id" class="table">
									<thead class="thead-dark">
										<tr>
											<th scope="col">No</th>
											<th scope="col">Judul</th>
											<th scope="col">Views</th>
											<th scope="col">Ip</th>
											<th scope="col">Time</th>
										</tr>
									</thead>
									<tbody>
										<?php $i = 1; ?>
										<?php foreach ($data['visitor'] as $row) : ?>
										<tr>
											<th scope="row"><?= $i++; ?></th>
											<td><?= $row['judul_content'] ?></td>
											<td><?= $row['visit_views'] ?></td>
											<td><?= $row['visitor_ip'] ?></td>
											<td><?= $row['waktu'] ?></td>
										</tr>
										<?php endforeach; ?>

									</tbody>
								</table>
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