<div class="clearfix"></div>
<footer>
	<div class="container-fluid">
		<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>.
			All Rights Reserved.</p>
	</div>
</footer>
</div>
<!-- END WRAPPER -->
<!-- Javascript -->
<script src="<?= ASSET . '/cms'; ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?= ASSET . '/cms'; ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= ASSET . '/cms'; ?>/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?= ASSET . '/cms'; ?>/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="<?= ASSET . '/cms'; ?>/vendor/chartist/js/chartist.min.js"></script>
<script src="<?= ASSET . '/cms'; ?>/scripts/klorofil-common.js"></script>
<!-- <script>
$(function() {
	var data, options;

	// headline charts
	data = {
		labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
		series: [
			[23, 29, 24, 40, 25, 24, 35],
			[14, 25, 18, 34, 29, 38, 44],
		]
	};

	options = {
		height: 300,
		showArea: true,
		showLine: false,
		showPoint: false,
		fullWidth: true,
		axisX: {
			showGrid: false
		},
		lineSmooth: false,
	};

	new Chartist.Line('#headline-chart', data, options);


	// visits trend charts
	data = {
		labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
		series: [{
			name: 'series-real',
			data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
		}, {
			name: 'series-projection',
			data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
		}]
	};

	options = {
		fullWidth: true,
		lineSmooth: false,
		height: "270px",
		low: 0,
		high: 'auto',
		series: {
			'series-projection': {
				showArea: true,
				showPoint: false,
				showLine: false
			},
		},
		axisX: {
			showGrid: false,

		},
		axisY: {
			showGrid: false,
			onlyInteger: true,
			offset: 0,
		},
		chartPadding: {
			left: 20,
			right: 20
		}
	};

	new Chartist.Line('#visits-trends-chart', data, options);


	// visits chart
	data = {
		labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
		series: [
			[6384, 6342, 5437, 2764, 3958, 5068, 7654]
		]
	};

	options = {
		height: 300,
		axisX: {
			showGrid: false
		},
	};

	new Chartist.Bar('#visits-chart', data, options);


	// real-time pie chart
	var sysLoad = $('#system-load').easyPieChart({
		size: 130,
		barColor: function(percent) {
			return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 -
				percent / 100)) + ", 0)";
		},
		trackColor: 'rgba(245, 245, 245, 0.8)',
		scaleColor: false,
		lineWidth: 5,
		lineCap: "square",
		animate: 800
	});

	var updateInterval = 3000; // in milliseconds

	setInterval(function() {
		var randomVal;
		randomVal = getRandomInt(0, 100);

		sysLoad.data('easyPieChart').update(randomVal);
		sysLoad.find('.percent').text(randomVal);
	}, updateInterval);

	function getRandomInt(min, max) {
		return Math.floor(Math.random() * (max - min + 1)) + min;
	}

});
</script> -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js">
</script>
<!-- <script type="text/javascript" charset="utf8" src="<?= ASSET . '/cms' ?>/datatable/DataTables/js/jquery.dataTables.js">
</script> -->
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
<script src="<?= BASEURL . 'public'; ?>/js/cms/server.js"></script>
<script src="<?= BASEURL . 'public'; ?>/js/cms/datatables.js"></script>
<script src="<?= BASEURL . 'public'; ?>/js/cms/profile.js"></script>


</body>

</html>