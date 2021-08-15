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
                                    <label for="bulan-artikel">bulan</label>
                                    <select id="bulan-artikel" class="form-control">
                                        <option value = "01">januari</option>
                                        <option value = "02">february</option>
                                        <option value = "03">maret</option>
                                        <option value = "04">april</option>
                                        <option value = "05">mei</option>
                                        <option value = "06">juni</option>
                                        <option value = "07">juli</option>
                                        <option value = "08">agustus</option>
                                        <option value = "09">september</option>
                                        <option value = "10">oktober</option>
                                        <option value = "11">november</option>
                                        <option value = "12">desember</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="tanggal-artikel">tanggal</label>
                                    <select id="tanggal-artikel" class="form-control">
                                        <?php for ($tanggal = 1; $tanggal <= 31; $tanggal++): ?>
                                            <option><?=$tanggal?></option>
                                        <?php endfor;?>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="tahun-artikel">tahun</label>
                                    <select  id="tahun-artikel" class="form-control">
                                        <?php for ($tahun = 2000; $tahun <= (int) date("Y"); $tahun++): ?>
                                            <option><?=$tahun?></option>
                                        <?php endfor;?>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label  for="limit-artikel">Limit</label>
                                    <select id="limit-artikel" class="form-control">
                                        <?php for ($limit = 5; $limit <= 35; $limit++): ?>
                                        <option><?=$limit?></option>
                                        <?php endfor;?>
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
                            <label for="#">show data</label>
                            <div class="row">
                                <canvas id="myChart" width="400" height="150"></canvas>
                            </div>
                            <div class="row" id="report-artikel">
                                <p id="showData"></p>

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
                                    <label for="bulan-artikel">bulan</label>
                                    <select id="bulan-artikel" class="form-control">
                                        <option value = "01">januari</option>
                                        <option value = "02">february</option>
                                        <option value = "03">maret</option>
                                        <option value = "04">april</option>
                                        <option value = "05">mei</option>
                                        <option value = "06">juni</option>
                                        <option value = "07">juli</option>
                                        <option value = "08">agustus</option>
                                        <option value = "09">september</option>
                                        <option value = "10">oktober</option>
                                        <option value = "11">november</option>
                                        <option value = "12">desember</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="tanggal-artikel">tanggal</label>
                                    <select id="tanggal-artikel" class="form-control">
                                        <?php for ($tanggal = 1; $tanggal <= 31; $tanggal++): ?>
                                            <option><?=$tanggal?></option>
                                        <?php endfor;?>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="tahun-artikel">tahun</label>
                                    <select  id="tahun-artikel" class="form-control">
                                        <?php for ($tahun = 2000; $tahun <= (int) date("Y"); $tahun++): ?>
                                            <option><?=$tahun?></option>
                                        <?php endfor;?>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label  for="limit-artikel">Limit</label>
                                    <select id="limit-artikel" class="form-control">
                                        <?php for ($limit = 5; $limit <= 35; $limit++): ?>
                                        <option><?=$limit?></option>
                                        <?php endfor;?>
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
                                    <label for="bulan-artikel">bulan</label>
                                    <select id="bulan-artikel" class="form-control">
                                        <option value = "01">januari</option>
                                        <option value = "02">february</option>
                                        <option value = "03">maret</option>
                                        <option value = "04">april</option>
                                        <option value = "05">mei</option>
                                        <option value = "06">juni</option>
                                        <option value = "07">juli</option>
                                        <option value = "08">agustus</option>
                                        <option value = "09">september</option>
                                        <option value = "10">oktober</option>
                                        <option value = "11">november</option>
                                        <option value = "12">desember</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="tanggal-artikel">tanggal</label>
                                    <select id="tanggal-artikel" class="form-control">
                                        <?php for ($tanggal = 1; $tanggal <= 31; $tanggal++): ?>
                                            <option><?=$tanggal?></option>
                                        <?php endfor;?>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="tahun-artikel">tahun</label>
                                    <select  id="tahun-artikel" class="form-control">
                                        <?php for ($tahun = 2000; $tahun <= (int) date("Y"); $tahun++): ?>
                                            <option><?=$tahun?></option>
                                        <?php endfor;?>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label  for="limit-artikel">Limit</label>
                                    <select id="limit-artikel" class="form-control">
                                        <?php for ($limit = 5; $limit <= 35; $limit++): ?>
                                        <option><?=$limit?></option>
                                        <?php endfor;?>
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
