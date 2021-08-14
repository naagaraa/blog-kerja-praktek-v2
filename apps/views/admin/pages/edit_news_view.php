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
					<div class="col-md">
						<!-- TASKS -->
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Halaman Edit</h3>
								<div class="right">
									<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
									<!-- <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button> -->
								</div>
							</div>
							<div class="panel-body">
								<form action="<?=BASEURL?>artikel/update/" method="POST" enctype="multipart/form-data">
									<input type="hidden" class="form-control" name="id" value="<?=$data['News']['id'];?>">
									<input type="hidden" class="form-control" id="judul" name="uniqid"
										value="<?=$data['News']['uniqid'];?>">
									<div class="form-group mb-5">
										<div class="col-md">
											<label for="judul">Judul</label>

											<input type="text" class="form-control" id="judul" name="judul"
												value="<?=$data['News']['judul'];?>">
										</div>
									</div>
									<div class="form-group  mb-5">
										<label for="penulis">Penulis</label>
										<input type="text" class="form-control" id="penulis" name="penulis"
											value="<?=$data['News']['penulis'];?>">
									</div>
									<div class="form-group  mb-5">
										<div class="row">
											<div class="col-md-6">
												<img src="<?=BASEURL . "upload/contents/cover/" . $data['News']['cover']?>" class="img-thumbnail" alt="Responsive image">
												<span> cover artikel <?=$data['News']['cover']?></span>
											</div>
											<div class="col-md-6">
												<img src="<?=BASEURL . "upload/contents/image/" . $data['News']['image']?>" class="img-thumbnail" alt="Responsive image">
												<span> image artikel <?=$data['News']['image']?></span>
											</div>
										</div>
									</div>
									<div class="form-group  mb-5">
										<div class="row">
											<div class="col-md-6">
												<div class="custom-file mb-3">
													<label class="custom-file-label" for="cover">File Gambar
														Cover
														:
													</label>
													<input type="file" class="custom-file-input" id="cover" name="cover">
												</div>
											</div>
											<div class="col-md-6">
												<div class="custom-file mb-3">
													<label class="custom-file-label" for="gambar">File Gambar
														Artikel :
													</label>
													<input type="file" class="custom-file-input" id="gambar" name="gambar">
												</div>
											</div>
										</div>
									</div>
									<div class="form-group mb-5">
										<label for="">Content</label>
										<textarea class="form-control" name="content"
											rows="3"><?=$data['News']['artikel'];?></textarea>
									</div>
									<button type="submit" class="btn btn-primary">Save</button>
								</form>
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
	<script>
	CKEDITOR.replace('content', {
		// Define the toolbar groups as it is a more accessible solution.
		toolbarGroups: [{
				"name": "basicstyles",
				"groups": ["basicstyles"]
			},
			{
				"name": "links",
				"groups": ["links"]
			},
			{
				"name": "paragraph",
				"groups": ["list", "blocks"]
			},
			// {
			// 	"name": "document",
			// 	"groups": ["mode"]
			// },
			{
				"name": "styles",
				"groups": ["styles"]
			},
			// {
			// 	"name": "about",
			// 	"groups": ["about"]
			// }
		],
		// Remove the redundant buttons from toolbar groups defined above.
		removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar'
	});
	</script>