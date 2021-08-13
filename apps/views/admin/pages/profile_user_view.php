<!-- WRAPPER -->
<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script> -->
<script src="<?=BASE_URL . 'public/cms';?>/vendor/chartjs/chart.js"></script>
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
				<!-- OVERVIEW -->
				<div class="panel panel-headline">
					<div class="panel-heading">
						<h3 class="panel-title">Profile - <?=$data['data_user']['nama']?></h3><br>
						<?php date_default_timezone_set('Asia/Jakarta');?>
						<p class="panel-subtitle">Day : <?=date('Y-m-d H:i:s', time());?></p>
					</div>
					<div class="panel-body">
						<div class="row">
							<!-- profile -->
							<div class="col-md-12">
								<p><?=$data['data_user']['deskripsi']?></p>
							</div>
						</div>
					</div>
				</div>
				<!-- END OVERVIEW -->

				<!-- TASKS Artikel line -->
				<div class="panel">
					<div class="panel-body">
						<form id="profile-update" enctype="multipart/form-data">
							<input type="hidden" class="custom-file-input" id="id" name="id" value="<?=$data['data_user']['id']?>">
							<div class="form-group mb-5">
								<div class="custom-file mb-3">
									<label class="custom-file-label" for="cover"><span style="color: red;">*</span>Foto :
									</label>
									<input type="file" class="custom-file-input" id="foto" name="foto">
								</div>
							</div>
							<div class="form-group mb-5">
								<div class="col-md">
									<label for="judul"><span style="color: red;">*</span>Nama</label>
									<input type="text" class="form-control" id="nama" name="nama" value="<?=$data['data_user']['nama']?>">
								</div>
							</div>
							<div class="form-group  mb-5">
								<label for="username"><span style="color: red;">*</span>Username</label>
								<input type="text" class="form-control" id="username" name="username" value="<?=$data['data_user']['user_name']?>">
							</div>
							<div class="form-group mb-5" style="display: none;">
								<label for="username"><span style="color: red;">*</span>Password</label>
								<input type="password" class="form-control md-none" id="password" name="password" value="<?=$data['data_user']['passw']?>" pattern=".{0}|.{8,}" title="Either 0 OR (8 chars minimum)">
							</div>
							<div class="form-group mb-5">
								<label for="username"><span style="color: red;">*</span>deskripsi</label>
								<textarea class="form-control" id="deskripsi" rows="3"><?=$data['data_user']['deskripsi']?></textarea>
							</div>
							<button type="submit" class="btn btn-primary">save</button>
						</form>
					</div>
				</div>
				<!-- reset password -->
				<div class="panel">
					<div class="panel-body">
						<form id="password-update">
							<div class="form-group mb-5">
								<label for="username"><span style="color: red;">*</span>Reset Password</label>
								<input type="password" class="form-control md-none" id="password" placeholder="update your old password"  pattern=".{0}|.{8,}" title="Either 0 OR (8 chars minimum)">
							</div>
							<button type="submit" class="btn btn-primary">save</button>
						</form>
					</div>
				</div>
				<!-- END TASKS Artikel Line -->

			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->


		<script>
			CKEDITOR.replace('deskripsi', {
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
