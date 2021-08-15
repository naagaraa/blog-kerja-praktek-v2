$(document).ready(function() {
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
    let order = $('#order-artikel').val();

    datas = new FormData;
    datas.append('bulan', bulan);
    datas.append('tanggal', tanggal);
    datas.append('tahun', tahun);
    datas.append('limit', limit);
    datas.append('order', order);

    $.ajax({
        type: "post",
        url: api_laporan_artikel,
        data: datas,
        dataType: "JSON",
        processData: false,
        contentType: false,
        success: function (response) {
           
            if (response.success == true) {
                

// https://www.encodedna.com/javascript/populate-json-data-to-html-table-using-javascript.htm
                let artikel = response.data

                // EXTRACT VALUE FOR HTML HEADER. 
                var col = [];
                for (var i = 0; i < artikel.length; i++) {
                    for (var key in artikel[i]) {
                        if (col.indexOf(key) === -1) {
                            col.push(key);
                        }
                    }
                }

                // CREATE DYNAMIC TABLE.
                var table = document.createElement("table");

                // CREATE HTML TABLE HEADER ROW USING THE EXTRACTED HEADERS ABOVE.
                var tr = table.insertRow(-1);                   // TABLE ROW.

                for (var i = 0; i < col.length; i++) {
                    var th = document.createElement("th");      // TABLE HEADER.
                    th.innerHTML = col[i];
                    tr.appendChild(th);
                }

                // ADD JSON DATA TO THE TABLE AS ROWS.
                for (var i = 0; i < artikel.length; i++) {

                    tr = table.insertRow(-1);

                    for (var j = 0; j < col.length; j++) {
                        var tabCell = tr.insertCell(-1);
                        tabCell.innerHTML = artikel[i][col[j]];
                    }
                }

                // FINALLY ADD THE NEWLY CREATED TABLE WITH JSON DATA TO A CONTAINER.
                var divContainer = document.getElementById("showData");
                divContainer.innerHTML = "";
                divContainer.appendChild(table);

                data_sukses(response.message)

                // add to chard js
                // passing data php array ke json javascript
                var data = response.data;

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
                var ctx = document.getElementById('myChart').getContext('2d');
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
            }
            
        },
        error: function (e) {  
            console.log(e);
        }
    });
}
function report_contact() {
    alert(2);
}
function report() {
    alert(3);
}




