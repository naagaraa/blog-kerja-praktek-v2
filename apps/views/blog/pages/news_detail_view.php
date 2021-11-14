<?php

// var_dump($data['artikel2']);
// die;

// foreach ($data['artikel2'] as $row) {
// 	// $test2 = html_entity_decode($test1);
// 	// $removeHtmltag = strip_tags($row['artikel']);
// 	// batasi panjang karakter
// 	// $deskripsi = substr($removeHtmltag, 0, 400);
// 	// echo $deskripsi;
// 	// echo '<br>';
// 	// echo '<br>';
// 	// echo '<br>';
// 	var_dump($row);
// }
// // }
// die;

?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<!-- for clear chache -->
	<meta http-equiv="pragma" content="no-cache" />
	<!-- end clear chache -->
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?= $data['detailNews']['judul']; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php
	// bersihkan karakter html
	$removeHtmltag = strip_tags($data['detailNews']['artikel']);
	$deskripsi = substr($removeHtmltag, 0, 160);
	?>

	<!-- open graph metatag -->
	<meta property="og:title" content="<?= $data['detailNews']['judul']; ?>">
	<meta property="og:description" content="<?= $deskripsi; ?>">
	<meta property="og:image" content="<?= BASEURL; ?>/upload/contents/image/<?= $data['detailNews']['image']; ?>">
	<meta property="og:url" content="www.digitaltraining.com">

	<!-- twitter metatag -->
	<meta name="twitter:title" content="<?= $data['detailNews']['judul']; ?>">
	<meta name="twitter:description" content="<?= $deskripsi; ?>">
	<meta name="twitter:image" content="<?= BASEURL; ?>/upload/contents/image/<?= $data['detailNews']['image']; ?>">
	<meta name="twitter:card" content="summary_large_image">

	<!-- Facebook Analytics -->
	<meta property="fb:app_id" content="your_app_id" />

	<!-- twitter analytics -->
	<meta name="twitter:site" content="@website-username">


	<!-- <link rel="manifest" href="site.webmanifest"> -->
	<!-- Place favicon.ico in the root directory -->
	<link rel="icon" type="image/png" sizes="96x96" href="<?= ASSET . '/admin'; ?>/img/favicon.png">
	<!-- CSS here -->
	<link rel="stylesheet" href="<?= ASSET . '/blog'; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= ASSET . '/blog'; ?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= ASSET . '/blog'; ?>/css/magnific-popup.css">
	<link rel="stylesheet" href="<?= ASSET . '/blog'; ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= ASSET . '/blog'; ?>/css/themify-icons.css">
	<link rel="stylesheet" href="<?= ASSET . '/blog'; ?>/css/nice-select.css">
	<link rel="stylesheet" href="<?= ASSET . '/blog'; ?>/css/flaticon.css">
	<link rel="stylesheet" href="<?= ASSET . '/blog'; ?>/css/gijgo.css">
	<link rel="stylesheet" href="<?= ASSET . '/blog'; ?>/css/animate.min.css">
	<link rel="stylesheet" href="<?= ASSET . '/blog'; ?>/css/slick.css">
	<link rel="stylesheet" href="<?= ASSET . '/blog'; ?>/css/slicknav.css">
	<link rel="stylesheet" href="<?= ASSET . '/blog'; ?>/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/brands.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>

	<!-- CSS local here -->
	<!-- <link rel="stylesheet" href="public/user/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/user/css/owl.carousel.min.css">
	<link rel="stylesheet" href="public/user/css/magnific-popup.css">
	<link rel="stylesheet" href="public/user/css/font-awesome.min.css">
	<link rel="stylesheet" href="public/user/css/themify-icons.css">
	<link rel="stylesheet" href="public/user/css/nice-select.css">
	<link rel="stylesheet" href="public/user/css/flaticon.css">
	<link rel="stylesheet" href="public/user/css/gijgo.css">
	<link rel="stylesheet" href="public/user/css/animate.min.css">
	<link rel="stylesheet" href="public/user/css/slick.css">
	<link rel="stylesheet" href="public/user/css/slicknav.css">
	<link rel="stylesheet" href="public/user/css/style.css"> -->
	<!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>


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
										<li><a href="<?= BASEURL  ?>">Home</a></li>
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
								<a href="<?= BASEURL  ?>" class="say_hi">Digital
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
			<div class="row">
				<div class="col">
					<!-- content -->
					<div class="row">
						<div class="col-md-12">
							<?php if ($data['detailNews']['status'] === "1") : ?>
								<h2><?= $data['detailNews']['judul']; ?></h2>
								<p><?= $data['detailNews']['penulis']; ?> &nbsp; &nbsp; &nbsp; | <span> &nbsp; &nbsp; &nbsp;
										<?= substr($data['detailNews']['posting'], 0, 10); ?></span> &nbsp; &nbsp; &nbsp; |
									<span> &nbsp; &nbsp; &nbsp;<i class="fa fa-eye"></i> <?= $data['views'] + 1; ?></span>
								</p>
							<?php endif ?>

							<?php if ($data['detailNews']['status'] === "1") : ?>
								<p>
									<!-- AddToAny BEGIN -->
								<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
									<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
									<a class="a2a_button_facebook"></a>
									<a class="a2a_button_twitter"></a>
									<a class="a2a_button_whatsapp"></a>
									<a class="a2a_button_telegram"></a>
									<a class="a2a_button_linkedin"></a>
								</div>
								<script async src="https://static.addtoany.com/menu/page.js"></script>
								<!-- AddToAny END -->
								</p>
								<div class="thumbnail">

									<img class="responsive" src="<?= BASEURL; ?>/upload/contents/image/<?= $data['detailNews']['image']; ?>" alt="cover" width="350">
								</div>
							<?php endif ?>
							<div class="col">
								<?php if ($data['detailNews']['status'] === "1") : ?>
									<p><?= $data['detailNews']['artikel']; ?></p>
									<div class="caption mt-30 ">

									</div>
									<br>
									<br>
									<p>
									<h4>Share This Artikel</h4>
									</p>
									<p>
										<!-- AddToAny BEGIN -->
									<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
										<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
										<a class="a2a_button_facebook"></a>
										<a class="a2a_button_twitter"></a>
										<a class="a2a_button_whatsapp"></a>
										<a class="a2a_button_telegram"></a>
										<a class="a2a_button_linkedin"></a>
									</div>
									<script async src="https://static.addtoany.com/menu/page.js"></script>
									<!-- AddToAny END -->
									</p>
								<?php else : ?>
									<h1>Your Artikel what wour find not found! sorry.</h1>
									<p>back to home page <a href="<?= BASEURL ?>">back here</a> </p>
								<?php endif ?>
							</div>
						</div>
					</div>
					<!-- end content -->
				</div>

				<!-- side nav -->
				<div class="col-md-3">
					<!-- content -->
					<h4>Content Terbaru</h4>
					<?php foreach ($data['artikel2'] as $row) : ?>
						<!-- <?php
								// bersihkan karakter html
								// $removeHtmltag = strip_tags($row['artikel']);
								// $deskripsi = substr($removeHtmltag, 0, 160);
								?> -->


						<?php if ($row['status'] == '1') : ?>

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