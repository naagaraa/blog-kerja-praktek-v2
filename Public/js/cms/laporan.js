$(document).ready(function() {
    // display
    $("#report-artikel-show").hide();
    $("#report-contact-show").hide();
    $("#report-all").hide();



    // action
    $('#form-artikel').submit(function (e) {
        e.preventDefault();
        report_artikel();
    });
    $('#form-contact').submit(function (e) {
        e.preventDefault();
        report_contact();
    });
    $('#form-report').submit(function (e) {
        e.preventDefault();
        report();
    });
     
});

function report_artikel() {
    let bulan = $('#bulan-artikel').val();
    let tanggal = $('#tanggal-artikel').val();
    let tahun = $('#tahun-artikel').val();
    let limit = $('#limit-artikel').val();

    datas = new FormData;
    datas.append('bulan', bulan);
    datas.append('tanggal', tanggal);
    datas.append('tahun', tahun);
    datas.append('limit', limit);

    // metode jquery ajax
    $.ajax({
        type: "post",
        url: api_laporan_artikel,
        data: datas,
        dataType: "JSON",
        processData: false,
        contentType: false,
        success: function (response) {
           
            if (response.success == true) {
        
                // show section
                $("#report-artikel-show").show();

                // reset datatable
                $('#table-artikel').DataTable().clear().destroy();

                // data tables config ajax
                $('#table-artikel').DataTable( {
                    "processing": true,
                    "serverSide": false,
                    "data" : response.datas,
                    "columns": [
                        { "data": "judul_content" },
                        { "data": "visit_views" },
                        { "data": "visitor_ip" },
                        { "data": "waktu" }
                    ]
                } );

                // show alert
                data_sukses(response.message)

                var data = response.datas;

                // array labels kosong
                var labels = []
                data.forEach(label => {
                    labels.push(label['judul_content'].substr(0, 10) + '...');
                });

                // array values	 kosong
                var values = [];
                data.forEach(value => {
                    values.push(value['visit_views']);
                });

                // line bar
                var ctx = document.getElementById('artikel-chard').getContext('2d');
                var myLineChart = new Chart(ctx, {
                    // The type of chart we want to create
                    type: 'line',

                    // The data for our dataset
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Total Visit Views',
                            backgroundColor: 'rgb(255, 99, 132)',
                            borderColor: 'rgb(255, 99, 132)',
                            data: values
                        }]
                    },
                    // Configuration options go here
                    options: {}
                });
                // end line bar

                

            } else if (response.success == false){
                data_gagal(response.message);
                // reset datatable
                $('#table-artikel').DataTable().clear().destroy();
                $("#report-artikel-show").hide();
            }
            
        },
        error: function (e) {  
            console.log(e);
        }
    });
}

// function contact
function report_contact() {
    let bulan = $('#bulan-contact').val();
    let tanggal = $('#tanggal-contact').val();
    let tahun = $('#tahun-contact').val();
    let limit = $('#limit-contact').val();

    datas = new FormData;
    datas.append('bulan', bulan);
    datas.append('tanggal', tanggal);
    datas.append('tahun', tahun);
    datas.append('limit', limit);

    // metode ajax
    $.ajax({
        type: "post",
        url: api_laporan_contact,
        data: datas,
        dataType: "JSON",
        processData: false,
        contentType: false,
        success: function (response) {
           
            if (response.success == true) {
        
                // show section
                $("#report-contact-show").show();

                // show alert
                data_sukses(response.message)
                
                // reset datatable
                $('#tabel-contact').DataTable().clear().destroy();


                // data tables config ajax
                $('#tabel-contact').DataTable( {
                    "processing": true,
                    "serverSide": false,
                    "data" : response.datas,
                    "columns": [
                        { "data": "nama" },
                        { "data": "email" },
                        { "data": "company" },
                        { "data": "perihal" }
                    ]
                } );

            } else if (response.success == false){
                data_gagal(response.message);
                // reset datatable
                $('#tabel-contact').DataTable().clear().destroy();
                $("#report-contact-show").hide();
            }
            
        },
        error: function (e) {  
            console.log(e);
        }
    });
}

// function report
function report() {
    let bulan = $('#bulan-report').val();
    let tanggal = $('#tanggal-report').val();
    let tahun = $('#tahun-report').val();
    let limit = $('#limit-report').val();

    datas = new FormData;
    datas.append('bulan', bulan);
    datas.append('tanggal', tanggal);
    datas.append('tahun', tahun);
    datas.append('limit', limit);

    // metode ajax
    $.ajax({
        type: "post",
        url: api_laporan_cetak,
        data: datas,
        dataType: "JSON",
        processData: false,
        contentType: false,
        success: function (response) {
           
            if (response.success == true) {
        
                // show section
                $("#report-all").show();

                // reset datatable
                $('#table-artikel-report').DataTable().clear().destroy();
                $('#tabel-contact-report').DataTable().clear().destroy();


                // show alert
                data_sukses(response.message)

                var data = response.artikel;
                // array labels kosong
                var labels = []
                data.forEach(label => {
                    labels.push(label['judul_content'].substr(0, 10) + '...');
                });

                // array values	 kosong
                var values = [];
                data.forEach(value => {
                    values.push(value['visit_views']);
                });

                // line bar
                var ctx = document.getElementById('artikel-chard-report').getContext('2d');
                var myLineChart = new Chart(ctx, {
                    // The type of chart we want to create
                    type: 'line',

                    // The data for our dataset
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Total Visit Views',
                            backgroundColor: 'rgb(255, 99, 132)',
                            borderColor: 'rgb(255, 99, 132)',
                            data: values
                        }]
                    },
                    // Configuration options go here
                    options: {}
                });
                // end line bar

                // data tables config ajax
                $('#table-artikel-report').DataTable( {
                    "processing": true,
                    "serverSide": false,
                    "data" : response.artikel,
                    "columns": [
                        { "data": "judul_content" },
                        { "data": "visit_views" },
                        { "data": "visitor_ip" },
                        { "data": "waktu" }
                    ]
                } );

                // data tables config ajax
                $('#tabel-contact-report').DataTable( {
                    "processing": true,
                    "serverSide": false,
                    "data" : response.contact,
                    "columns": [
                        { "data": "nama" },
                        { "data": "email" },
                        { "data": "company" },
                        { "data": "perihal" }
                    ]
                } );

            } else if (response.success == false){
                data_gagal(response.message);
                // reset datatable
                $('#table-artikel-report').DataTable().clear().destroy();
                $('#tabel-contact-report').DataTable().clear().destroy();
                $("#report-all").hide();
            }
            
        },
        error: function (e) {  
            console.log(e);
        }
    });
}




