<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				<li>
					<a href="<?= BASEURL . 'dashboard'; ?>">
						<!-- <i class="lnr lnr-home"></i> -->
						<span>Dashboard</span>
					</a>
				</li>
				<!-- <li>
					<a href="<?= BASEURL . 'chard'; ?>" class="">
						<i class="lnr lnr-chart-bars"></i>
						<span>Charts</span>
					</a>
				</li> -->
				<li>
					<a href="<?= BASEURL . 'artikel/list'; ?>" class="">
						<!-- <i class="lnr lnr-code"></i> -->
						<span>List Article</span>
					</a>
				</li>
				<li><a href="<?= BASEURL . 'artikel/tambah'; ?>" class="">
						<!-- <i class="lnr lnr-code"></i> -->
						<span>Tambah Article</span>
					</a>
				</li>
				<li>
					<a href="<?= BASEURL . 'contact/list'; ?>" class="">
						<!-- <i class="lnr lnr-code"> -->
						</i> <span>Contact Us</span>
					</a>
				</li>

				<!-- akses super admin -->
				<?php  if ($_SESSION['level'] === '0') : 
				?>
				<?php
				echo "<li>
							<a href=" . "'" . BASEURL . "register'" . "class=''>
								</i> <span>Tambah User</span>
							</a>
						</li>
						<li>
						<a href=" . "'" . BASEURL . "user/list'" . "class=''>
								</i> <span>User List</span>
							</a>
						</li>
						<li>
						<a href=" . "'" . BASEURL . "report'" . "class=''>
								</i> <span>Track Akses</span>
							</a>
						</li>
						<li>
						<a href=" . "'" . BASEURL . "visit/list'" . "class=''>
								</i> <span>Visit Page</span>
							</a>
						</li>"; ?>
				<?php elseif ($_SESSION['level'] === '1') : 
				?>
				<?php
				echo "<li>
							<a href=" . "'" . BASEURL . "register'" . "class=''>
								</i> <span>Tambah User</span>
							</a>
						</li>
						<li>
						<a href=" . "'" . BASEURL . "user/list'" . "class=''>
								</i> <span>User List</span>
							</a>
						</li>"; ?>
				<?php endif; 
				?>
				<!--  end akses super admin -->


			</ul>
		</nav>
	</div>
</div>
<!-- END LEFT SIDEBAR -->