// news page
$(document).ready(function() {
	// handle search
	$('#search').keyup(function() {
		let txt = $(this).val();
		// cek kondisi
		if (txt !== '') {
			let datas = new FormData();
			datas.append('search', txt);

			$.ajax({
				url: search ,
				method: "POST",
				data: datas,
				processData: false,
				contentType: false,
				dataType: "text",
				success: function(data) {
					console.log(data);
					$('#hasil').html(data);
				},
				error: function(e) {
					console.log(e);
				}
            });
        // handle jika no search data
		} else {
			let txt = $(this).val();
			if (txt == '') {
				var datas = new FormData();
				datas.append('datasaya', '');
				$.ajax({
					url: artikel,
					method: "POST",
					data: datas,
					processData: false,
					contentType: false,
					dataType: "text",
					success: function(data) {
						$('#hasil').html(data);
					},
					error: function(e) {
						console.log(e);
					}
				});
			}
		};
	});
});

