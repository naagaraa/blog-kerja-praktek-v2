<!-- WRAPPER -->
<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script> -->
<script src="<?=BASEURL . 'public/cms';?>/vendor/chartjs/chart.js"></script>
<div id="wrapper">
	<!-- LEFT SIDE BAR -->
	<?php $this->view("admin/shared/sidebar_view");?>
	<!-- END LEFT SIDE BAR -->
	<!-- MAIN -->
	<div class="main">
		<!-- MAIN CONTENT -->
		<div class="main-content">
			<div class="container-fluid">

				<!-- TASKS Artikel line -->
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Artikel</h3>
						<div class="right">
							<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
						</div>
					</div>
					<div class="panel-body">
                        <form id="form-artikel">
                            <div class="row ">
                                <div class="col-md-2">
                                    <label for="bulan">bulan</label>
                                    <select class="form-control">
                                        <option>januari</option>
                                        <option>february</option>
                                        <option>maret</option>
                                        <option>april</option>
                                        <option>mei</option>
                                        <option>juni</option>
                                        <option>juli</option>
                                        <option>agustus</option>
                                        <option>september</option>
                                        <option>oktober</option>
                                        <option>november</option>
                                        <option>desember</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="bulan">tanggal</label>
                                    <select class="form-control">
                                        <option>Default select</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="bulan">tahun</label>
                                    <select class="form-control">
                                        <option>Default select</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="bulan">Limit</label>
                                    <select class="form-control">
                                        <option>Default select</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="bulan">order</label>
                                    <select class="form-control">
                                        <option>terendah</option>
                                        <option>tertinggi</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-sm btn-primary mt-5" >preview</button>
                                </div>
                            </div>
                        </form>
					</div>
				</div>
                <div class="panel">
					<div class="panel-heading">
                        <div class="panel-body">
                                <div class="row">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores id nisi quos, ex atque eos, quibusdam, neque praesentium quae corporis ad dolore libero! Accusantium doloremque asperiores temporibus minima ipsam nam.
                                </div>
                        </div>
                    </div>
                </div>
				<!-- END TASKS Artikel Line -->

				<!-- TASKS Artikel bar -->
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Contact<h3>
								<div class="right">
									<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
									<!-- <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button> -->
								</div>
					</div>
					<div class="panel-body">
                    <form id="form-contact">
                            <div class="row ">
                                <div class="col-md-2">
                                    <label for="bulan">bulan</label>
                                    <select class="form-control">
                                        <option>januari</option>
                                        <option>february</option>
                                        <option>maret</option>
                                        <option>april</option>
                                        <option>mei</option>
                                        <option>juni</option>
                                        <option>juli</option>
                                        <option>agustus</option>
                                        <option>september</option>
                                        <option>oktober</option>
                                        <option>november</option>
                                        <option>desember</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="bulan">tanggal</label>
                                    <select class="form-control">
                                        <option>Default select</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="bulan">tahun</label>
                                    <select class="form-control">
                                        <option>Default select</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="bulan">Limit</label>
                                    <select class="form-control">
                                        <option>Default select</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="bulan">order</label>
                                    <select class="form-control">
                                        <option>terendah</option>
                                        <option>tertinggi</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-sm btn-primary mt-5" >preview</button>
                                </div>
                            </div>
                        </form>
					</div>
				</div>
                <div class="panel">
					<div class="panel-heading">
                        <div class="panel-body">
                                <div class="row">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores id nisi quos, ex atque eos, quibusdam, neque praesentium quae corporis ad dolore libero! Accusantium doloremque asperiores temporibus minima ipsam nam.
                                </div>
                        </div>
                    </div>
                </div>
				<!-- END TASKS Artikel bar -->

				<!-- TASKS Artikel bar -->
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Report<h3>
								<div class="right">
									<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
									<!-- <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button> -->
								</div>
					</div>
					<div class="panel-body">
                    <form id="form-report">
                            <div class="row ">
                                <div class="col-md-2">
                                    <label for="bulan">bulan</label>
                                    <select class="form-control">
                                        <option>januari</option>
                                        <option>february</option>
                                        <option>maret</option>
                                        <option>april</option>
                                        <option>mei</option>
                                        <option>juni</option>
                                        <option>juli</option>
                                        <option>agustus</option>
                                        <option>september</option>
                                        <option>oktober</option>
                                        <option>november</option>
                                        <option>desember</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="bulan">tanggal</label>
                                    <select class="form-control">
                                        <option>Default select</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="bulan">tahun</label>
                                    <select class="form-control">
                                        <option>Default select</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="bulan">Limit</label>
                                    <select class="form-control">
                                        <option>Default select</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-sm btn-primary mt-5" >preview</button>
                                </div>
                            </div>
                        </form>
					</div>
				</div>
                <div class="panel">
					<div class="panel-heading">
                        <div class="panel-body">
                                <div class="row">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores id nisi quos, ex atque eos, quibusdam, neque praesentium quae corporis ad dolore libero! Accusantium doloremque asperiores temporibus minima ipsam nam.
                                </div>
                        </div>
                    </div>
                </div>
				<!-- END TASKS Artikel bar -->


			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
