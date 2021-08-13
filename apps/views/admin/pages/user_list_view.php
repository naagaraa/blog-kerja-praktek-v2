
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
								<h3 class="panel-title">Halaman User List</h3>
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
											<th scope="col">Nama</th>
											<th scope="col">Role</th>
											<th scope="col">Username</th>
											<th scope="col">Deskripsi</th>

											<?php if ($_SESSION['level'] === '0') : ?>
											<th scope="col">Action</th>
											<th scope="col">status</th>
											<?php elseif ($_SESSION['level'] === '1') : ?>
											<th scope="col"></th>
											<th scope="col">status</th>
											<?php endif; ?>
										</tr>
									</thead>
									<tbody>
										<?php $i = 1; ?>
										<?php foreach ($data['user'] as $row) : ?>
										<tr>
											<th scope="row"><?= $i++; ?></th>
											<td><?= $row['nama'] ?></td>
											<?php if ($row['level'] == 0) : ?>
											<td>Root</td>
											<?php elseif ($row['level'] == 1) : ?>
											<td>admin</td>
											<?php else : ?>
											<td>User</td>
											<?php endif; ?>
											<td><?= $row['user_name'] ?></td>
											<td><?= $row['deskripsi'] ?></td>
											<td>
												<!-- cek jika root -->
												<?php if ($_SESSION['level'] === '0') : ?>
												<!-- cek jika login dan username root -->
												<?php if ($_SESSION['login'] == true & $_SESSION['username'] == $row['user_name']) : ?>
												<div class="btn-group" role="group">
													<a href="<?= BASEURL . 'user/remove/' . $row['id']; ?>">
														<button type="button" class="btn btn-danger" disabled>Delete</button>
													</a>
												</div>

												<?php  else : ?>
												<div class="btn-group" role="group">
													<a href="<?= BASEURL . 'user/remove/' . $row['id']; ?>">
														<button type="button" class="btn btn-danger">Delete</button>
													</a>
												</div>

												<?php endif; ?>
												<?php elseif ($_SESSION['level'] === '0') : ?>
												<div class="btn-group" role="group">
													<a href="">
														<button disabled type="button" class="btn btn-warning">No
															Action</button>
													</a>
												</div>
												<?php endif; ?>
											</td>
											<td>
												<!-- cek jika root -->
												<?php if ($_SESSION['level'] === '0') : ?>
												<!-- cek jika login dan username root -->
												<?php if ($_SESSION['login'] == true & $_SESSION['username'] == $row['user_name']) : ?>
												<?php else : ?>
												<?php if ($row['status'] == '0') : ?>
												<div class="btn-group" role="group">
													<a href="<?= BASEURL . 'user/approve/' . $row['id']; ?>">
														<button type="button" class="btn btn-primary">approve</button>
													</a>
												</div>
												<?php elseif ($row['status'] == '1') : ?>
												<div class="btn-group" role="group">
													<a href="<?= BASEURL . '/user/unapprove/' . $row['id']; ?>">
														<button type="button" class="btn btn-warning">Unapprove</button>
													</a>
												</div>
												<?php endif; ?>
												<?php endif; ?>
												<?php elseif ($_SESSION['level'] === '0') : ?>
												<div class="btn-group" role="group">
													<a href="">
														<button disabled class="btn btn-warning">No
															Action</button>
													</a>
												</div>
												<?php elseif ($row["status"] === '0') : ?>
												<div class="btn-group" role="group">
													<a href="#">
														<button class="btn btn-danger">pending</button>
													</a>
												</div>
												<?php elseif ($row["status"] === '1') : ?>
													<div class="btn-group" role="group">
													<a href="#">
														<button class="btn btn-primary">aktif</button>
													</a>
												</div>
												<?php endif; ?>
											</td>
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