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
								<h3 class="panel-title">Halaman List Artikel</h3>
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
											<th scope="col">Judul</th>
											<th scope="col">Status</th>
											<th scope="col">Penulis</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $i = 1; ?>
										<?php foreach ($data['listNews'] as $row) : ?>
											<tr>
												<th scope="row"><?= $i++ ?></th>
												<td><?= $row['urlid']; ?></td>
												<td>
													<?php if ($row['status'] == 1) :
													?>
														Publish
													<?php else :
													?>
														Unpublish
													<?php endif;
													?>
												</td>
												<td><?= $row['penulis']; ?></td>
												<td>
													<div class="btn-group" role="group" aria-label="Basic example">
														<?php if ($row['status'] == 0) :
														?>
															<a href="<?= BASEURL ?>artikel/publish/<?= $row['urlid']; ?>"><button type="button" class="btn btn-primary">Publish</button>
															</a>
														<?php else : ?>
															<a href="<?= BASEURL ?>artikel/unpublish/<?= $row['urlid']; ?>"><button type="button" class="btn btn-info">unPublish</button>
															</a>
														<?php endif;
														?>

														<a href="<?= BASEURL ?>news/detail/<?= $row['urlid']; ?>" target="_blank">
															<button type="button" class="btn btn-warning">Preview</button>
														</a>
														<a href="<?= BASEURL . 'artikel/edit/' . $row['urlid']; ?>">
															<button type="button" class="btn btn-success">Edit</button>
														</a>
														<?php //if ($_SESSION['login'] == true & $_SESSION['level'] == '0') :
														?>
														<a href="<?= BASEURL . 'artikel/remove/' . $row['uniqid']; ?>">
															<button type="button" class="btn btn-danger">Delete</button>
														</a>
														<?php //endif;
														?>
													</div>
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