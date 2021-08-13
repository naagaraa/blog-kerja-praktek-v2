<!-- WRAPPER -->
<div id="wrapper">
	<div class="vertical-align-wrap">
		<div class="vertical-align-middle">
			<div class="auth-box ">
				<div class="left">
					<div class="content">
						<div class="header">
							<div class="logo text-center">
								<!-- <img src="<?= BASE_URL . '/admin'; ?>/img/logo-dark.png"
									alt="Klorofil Logo"> -->
							</div>
							<p class="lead">Login to your account</p>
						</div>
						<form action id="login" class="form-auth-small">
							<div class="form-group">
								<label for="signin-username" class="control-label sr-only">Username</label>
								<input type="text" class="form-control" id="username" name="username" placeholder="Username">
							</div>
							<div class="form-group">
								<label for="signin-password" class="control-label sr-only">Password</label>
								<input type="password" class="form-control" id="password" name="password" placeholder="Password">
							</div>

							<button class="btn btn-primary btn-lg btn-block">LOGIN</button>
							<br>
							<div class="bottom" style="cursor: pointer;" data-toggle="modal" data-target="#ModalForgotPasswd">
								<span class="helper-text"><i class="fa fa-lock"></i>
									Forgot password?</span>
							</div>
						</form>
					</div>
				</div>
				<div class="right">
					<div class="overlay"></div>
					<div class="content text">
						<h1 class="heading">Digital Training</h1>
						<p>by The Develovers | PT SPS | OrangT Divisi</p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<!-- END WRAPPER -->
<div class="container">
	<!-- Modal -->
	<div class="modal fade" id="ModalForgotPasswd" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Reset Password</h4>
				</div>
				<div class="modal-body">
					<p>Please Contact Your Administrator or Developer at your Company.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
	</div>

<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
<script src="<?= BASEURL . 'public'; ?>/js/cms/notification.js"></script>
<script src="<?= BASEURL . 'public'; ?>/js/cms/server.js"></script>
<script src="<?= BASEURL . 'public'; ?>/js/cms/auth.js"></script>


</body>

</html>