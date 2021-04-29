<?php
?>
<!-- header-start -->
<header>
	<div class="header-area ">
		<div id="sticky-header" class="main-header-area bg-dark-color">
			<div class="container-fluid p-0">
				<div class="row align-items-center no-gutters">
					<div class="col-xl-2 col-lg-2">
						<div class="logo-img">
							<a href="index.html">
								<img src="img/logo.png" alt="">
							</a>
						</div>
					</div>
					<div class="col-xl-8 col-lg-8">
						<div class="main-menu  d-none d-lg-block text-center">
							<nav>
								<ul id="navigation">
									<li><a href="<?= BASEURL; ?>">Home</a></li>
									<li><a href="<?= BASEURL . 'feature'; ?>">Feature</a></li>
									<li><a href="<?= BASEURL . 'service'; ?>">Services</a></li>
									<li><a href="<?= BASEURL . 'news'; ?>">News</a></li>
									<li><a href="<?= BASEURL . 'about'; ?>">About</a></li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="col-lg-2 d-none d-lg-block">
						<div class="log_chat_area d-flex align-items-end">
							<br>
							<br>
							<a href="<?= BASEURL ?>" class="say_hi">Digital
								Training</a>
						</div>
					</div>
					<div class="col-12">
						<div class="mobile_menu d-block d-lg-none"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- header-end -->

<!-- service_area  -->
<div class="service_area">
	<div class="container">
		<div class="row mb-20px">
			<div class="col">
				<h5>Find Something here :</h5>
				<input name="search" id="search" class="form-control mr-sm-2" type="search" placeholder="Search"
					aria-label="Search">
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div id="hasil">
					<!-- content -->
					<?php foreach ($data['artikel'] as $row) : ?>
					<?php
						// bersihkan karakter html
						$removeHtmltag = strip_tags($row['artikel']);
						$deskripsi = substr($removeHtmltag, 0, 160);
						?>

					<?php if ($row['status'] == 1) : ?>
					<a href="<?= BASEURL ?>news/detail/<?= $row['urlid']; ?>" target="_blank">
						<div class="row mb-20px">
							<div class="col-md-12">
								<div class="thumbnail">
									<div class="row">
										<div class="col">
											<img src="<?= BASEURL; ?>/upload/contents/cover/<?= $row['cover']; ?>" alt="cover" width="350">
										</div>
										<div class="col">
											<div class="caption mt-30">
												<h3><?= $row['judul'] ?></h3>
												<p><?= $deskripsi; ?> ... </p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</a>
					<?php endif; ?>
					<?php endforeach; ?>
					<!-- end content -->
				</div>

				<!-- pagination -->
				<nav aria-label="Page navigation example">
					<ul class="pagination">
						<!-- <li class="page-item"><a class="page-link" href="#">Previous</a></li> -->
						<?php for ($i = 1; $i <= $data['pages']; $i++) : ?>
						<li class="page-item"><a class="page-link" href="<?= BASEURL; ?>news/page/<?= $i; ?>"><?= $i; ?></a></li>
						<?php endfor; ?>
						<!-- <li class="page-item"><a class="page-link" href="#">Next</a></li> -->
					</ul>
				</nav>
				<!-- end oagination -->

			</div>

			<!-- side nav -->
			<div class="col-md-3">
				<!-- content -->
				<h4>Content Terbaru</h4>
				<?php foreach ($data['artikel2'] as $row) : ?>
				<?php
					// bersihkan karakter html
					$removeHtmltag = strip_tags($row['artikel']);
					$deskripsi = substr($removeHtmltag, 0, 160);
					?>

				<?php if ($row['status'] == 1) : ?>
				<a href="<?= BASEURL ?>news/detail/<?= $row['urlid']; ?>" target="_blank">
					<div class="row">
						<div class="col-md-12">
							<ul class="list-group list-group-flush">
								<li class="list-group-item"><?= $row['judul'] ?></li>
							</ul>
						</div>
					</div>
				</a>
				<?php endif; ?>
				<?php endforeach; ?>
				<!-- end content -->
			</div>
			<!-- end sideanv -->
		</div>
	</div>
</div>
</div>
