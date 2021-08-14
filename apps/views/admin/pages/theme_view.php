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
				<!-- OVERVIEW -->
				<div class="panel panel-headline">
					<div class="panel-heading">
						<h3 class="panel-title">Theme Management </h3><br>
					</div>
					<div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Setting - Menu</h2>
                                <button id="sosmed" type="button" class="btn btn-primary">sosial Theme</button>
                                <!-- <button id="image" type="button" class="btn btn-primary">image Theme</button> -->
                                <button id="text_apps" type="button" class="btn btn-primary">Text Theme</button>
                            </div>
                        </div>
					</div>
				</div>
				<!-- END OVERVIEW -->

                <div id="mytheme">
                </div>

			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="<?=BASEURL . 'public';?>/js/cms/notification.js"></script>
		<script>
            $(document).ready(function () {
                // config view ajax  navigation
                let sosmedView = "<?=BASEURL . 'theme/sosmed'?>";
                let imageView = "<?=BASEURL . 'theme/image'?>";
                let textView = "<?=BASEURL . 'theme/text'?>";

                $('#mytheme').load(sosmedView);

                $('#sosmed').click(function (e) {
                    $('#mytheme').load(sosmedView);
                    e.preventDefault();
                });
                $('#image').click(function (e) {
                    $('#mytheme').load(imageView);
                    e.preventDefault();
                });
                $('#text_apps').click(function (e) {
                    $('#mytheme').load(textView);
                    e.preventDefault();
                });
            });

		</script>